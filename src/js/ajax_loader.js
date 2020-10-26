window.onload = function() {

        var load = function(e) {
            // prevent browser to open link
            event.preventDefault();

            // exit if target is undefined
            if(typeof(e.target) == 'undefined' ) {return;}

            // exit if clicked element is not a link
            if (e.target.tagName !== 'A') {return;}

            // get href from clicked element
            var href = e.target.getAttribute("href");

            // retrieve container and source
            var href_parts = href.split('=');
            var container = href_parts[0].substr(1);
            var source = href_parts[1];

            // instantiate a new request
            var request = new XMLHttpRequest();

            // bind a function to handle request status
            request.onreadystatechange = function() {
                if(request.readyState < 4) {
                    // handle preload
                    return;
                }
                if(request.status !== 200) {
                    // handle error
                    return;
                }
                if(request.readyState === 4) {
                    // handle successful request
                    successCallback();
                }
            };

            // open the request to the specified source
            request.open('GET', source, true);
            // execute the request
            request.send('');

            successCallback = function() {
                // on success place response content in the specified container
                document.getElementById(container).innerHTML = request.responseText;

                // change url in the address bar and save it in the history
                history.pushState('','',"?"+container+"="+source);
            }
        };

        // add an event listener to the entire document.
        //document.addEventListener('click', load, false);

        var elements = document.getElementsByClassName("ajax");
        for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', load, false)}

        // the reason why the event listener is attached
        // to the whole document and not only to the <a>
        // elements in the page is that otherwise the links
        // included in the dynamic content would not
        // listen to the click event

    };