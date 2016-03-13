<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Mailgun;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateMemberRequest;

class HomeController extends Controller
{
    public function subscribe(Request $request) {
		// record source: facebook, organic
        session()->put('referrer', $request->server('HTTP_REFERER'));

		// display subscribe form
		return view('subscribe', [ 
			'action' => 'subscribe'
		]);
    }

    public function postSubscribe(CreateMemberRequest $request) {
        $inputs = $request->all();
        
        if ($inputs['action'] == 'subscribe') {
            $inputs['facebook_name'] = '';
            $inputs['subscribe'] = true;
        }

        $inputs['referrer'] = (session()->has('users') ? session('referrer') : '');

        $added = $this->add_member($inputs);

        if ($added) {
            $log_msg = "A user has just subscribed to Corozal Classifieds Newsletter. (" . $inputs['first_name'] . " " . $inputs['last_name'] . ")";
            Log::info($log_msg, ['data' => $inputs]);

            // send subscribe success email
        }
        
        return view('subscribe_success', [
            'action' => 'subscribe',
            'inputs' => $inputs
        ]);
    }

    public function request(Request $request) {
    	// record source: facebook, organic
    	session()->put('referrer', $request->server('HTTP_REFERER'));

    	// display subscribe form
		return view('subscribe', [
			'action' => 'request',
		]);
    }

    public function postRequest(CreateMemberRequest $request) {
        $inputs = $request->all();

        if (!array_key_exists('subscribe', $inputs)) {
            $inputs['subscribe'] = false;
        }

        $inputs['referrer'] = (session()->has('users') ? session('referrer') : '');
         
        $added = $this->add_member($inputs);

        if ($added) {
            $log_msg = "A user has just requested to join Corozal Classifieds Facebook Group. (" . $inputs['first_name'] . " " . $inputs['last_name'] . ")";
            Log::info($log_msg, ['data' => $inputs]);

            // send subscribe success email
        }

    	return view('subscribe_success', [
            'action' => 'request',
            'inputs' => $inputs
        ]);
    }

    public function add_member($inputs) {
        $list = Mailgun::lists()->get(env('MAILGUN_MAILINGLIST'));

        $new_member = $list->addMember([
            'address' => $inputs['email'],
            'name' => $inputs['first_name'] . ' ' . $inputs['last_name'],
            'vars' => ['district' => $inputs['district'], 'facebook_name' => $inputs['facebook_name'], 'referrer' => $inputs['referrer']],
            'subscribed' => $inputs['subscribe'],
            'upsert' => true,
        ]);

        if (is_object($new_member)) {
            $this->notify_admin_new_member($inputs);
            Log::info('New user has just subscribed to CC Weekly Newsletter - ' . $inputs['email']);

            return true;
        } else {
            Log::error($inputs['email'] . ' has failed to subscribe in CC Weekly Newsletter');

            return false;
        }
    }

    public function notify_admin_new_member($inputs) {
        Mail::send('mail.admin.notify_new_member', ['inputs' => $inputs], function ($m) use ($inputs) {
            $m->to('corozalclassifieds@gmail.com')->subject('New Request/Subscription from corozalclassifieds.com');
        });
    }
}
