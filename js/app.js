console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

$(function(){
    $('.beforeAfter').beforeAfter();
});

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const app = x('#app');
        const header = x('.header');
        const sidebar = x('.sidebar');

        const sidebarSticky = () => {
            if (sidebar){
                const h_header = header ? header.offsetHeight + 20 + 'px' : 0
                console.log('height Header', h_header);
                UIkit.sticky(sidebar, {
                    'offset': h_header,
                    'start': 0.001 + 'px',
                    'end': true,
                });
            }
        }

        sidebarSticky()

        onresize = (event) => {
            console.log('onresize')
            sidebarSticky()
        };

        document.onscroll = function () {
            let scrollTop = window.scrollY || document.documentElement.scrollTop;
            console.log('scrollTop',scrollTop);
            sidebarSticky()
            if (scrollTop > 0){

            }else {

            }
        }
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})


$(window).on("load", function (e) {

});