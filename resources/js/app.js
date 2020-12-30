/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');
//COLORS
const PRIMARYCOLOR = '#F4773D';

//Nav Links 
const navItems = document.querySelectorAll(".nav-item");
for(var i = 0; i< navItems.length; i++){
    //Animate In
    navItems[i].addEventListener("mouseenter", (e) => {
        e.target.style.background = PRIMARYCOLOR;
        e.target.style.borderRadius = '5px';

    });
    //Animate Out
    navItems[i].addEventListener("mouseleave", (e) => {
        e.target.style.background = 'transparent';
        e.target.style.borderRadius = '0px';

    });

}