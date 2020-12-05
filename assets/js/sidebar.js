(function($) {
    $(document).ready(()=> {
        let toggleButton = $('#sidebar-toggle');
        let sidebar = $('#sidebar');
        let sidebarContent = $('#sidebar-content');

        toggleButton.on('click', (e) => {

            $('#sidebar-icon').toggleClass('fa-bars fa-times');

            // Change the sidebar styles
            sidebar.toggleClass('right-8 md:right-0 w-1/12 right-0 md:w-1/4 w-1/2 bg-SemiGrey');
            sidebarContent.toggleClass('opacity-0');
            console.log("Clicked");
        });
    });
  })( jQuery );