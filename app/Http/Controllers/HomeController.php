<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Mailgun;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateMemberRequest;

class HomeController extends Controller
{
    public function subscribe() {
		// record source: facebook, organic

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

        $added = $this->add_member($inputs);

        if ($added) {
            // send subscribe success email
        }
        
        return view('subscribe_success', [
            'action' => 'subscribe',
            'inputs' => $inputs
        ]);
    }

    public function request() {
    	// record source: facebook, organic
    	
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

         $added = $this->add_member($inputs);

        if ($added) {
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
            'vars' => ['district' => $inputs['district'], 'facebook_name' => $inputs['facebook_name']],
            'subscribed' => $inputs['subscribe'],
            'upsert' => true,
        ]);

        if (is_object($new_member)) {
            $this->notify_admin_new_member($inputs['email']);
            Log::info('New user has just subscribed to CC Weekly Newsletter - ' . $inputs['email']);

            return true;
        } else {
            Log::error($inputs['email'] . ' has failed to subscribe in CC Weekly Newsletter');

            return false;
        }
    }

    public function notify_admin_new_member($email) {
        // notify corozalclassifieds@gmail.com
    }
}
