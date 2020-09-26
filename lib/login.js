var googleAuth;

function onLibraryLoaded(existe) {
    gapi.load('auth2', function() {
        gapi.auth2.init({
            client_id: '356408280239-7airslbg59lt2nped9l4dtqm2rf25aii.apps.googleusercontent.com',
            scope: 'email'
        }).then(function(googleUser) {
          console.log('library loaded')
          googleAuth = gapi.auth2.getAuthInstance();
          checkUser(existe);
        }, function(error) {
            console.log('error loading library')
        })
    })
}

function checkUser(existe){
    if (!existe){
        gapi.load('auth2', function() {
            // @todo Cada vez que se entra al index se desloguea, hacer que solo pase
            //       si se viene desde volver a ingresar sesion
            googleAuth.signOut().then(function(googleUser) {
              console.log('user loged out')
            }, function(error) {
                console.log('user failed to log out')
            })
        })
     }
}

function onSignInClicked() {
    console.log(googleAuth);
    gapi.load('auth2', function() {
        googleAuth.signIn().then(function(googleUser) {
          console.log('user signed in')
          onSignIn(googleAuth.currentUser.get());
        }, function(error) {
            console.log('user failed to sign in')
        })
    })
}

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var url = '../Vista/index.php';

    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    $.redirectPost(url, {"email": profile.getEmail(), "nombre": profile.getName(), "imagen": profile.getImageUrl(), "googleid": profile.getId()});
}

// jquery extend function
$.extend(
        {
            redirectPost: function (location, args)
            {
                var form = $('<form></form>');
                form.attr("method", "post");
                form.attr("action", location);

                $.each(args, function (key, value) {
                    var field = $('<input></input>');

                    field.attr("type", "hidden");
                    field.attr("name", key);
                    field.attr("value", value);

                    form.append(field);
                });
                $(form).appendTo('body').submit();
            }
        }
);
