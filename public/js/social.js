$(document).ready(function() {
  var shareButton = new ShareButton({
    title: 'Corozal Classifieds',
    description : 'Corozal Classifieds - sign up for our weekly newsletter or join our Facebook group to receive most recently sell items in the country of Belize!',
    image : '/img/cc_logo_250x250.png',
    ui: {
      button_font: false,
      buttonText: 'Spread the word',
      icon_font: false
    },
    networks: {
        googlePlus: {
        enabled: false
      },
      twitter: {
        enabled: true  // Enable Twitter. [Default: true]
      },
      facebook: {
        enabled: true,  // Enable Facebook. [Default: true]
        appId: '111031405954220',
      },
      pinterest: {
        enabled: false
    },
      reddit: {
        enabled: false
      },
      linkedin: {
        enabled:  false
      },
      whatsapp: {
        enabled: false
      },
      email: {
        enabled: true
      }
    }
  });

  window.setTimeout(function() { shareButton.toggle(); }, 1000);
  shareButton.toggleListen();
});