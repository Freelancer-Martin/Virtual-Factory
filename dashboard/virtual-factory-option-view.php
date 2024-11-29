<?php
class Virtual_Factory_View
{



  public function __construct()
  {

    add_action( 'admin_menu', array( $this, 'virtual_factory_view_settings_page' ) );
    //add_action( 'admin_menu', array( $this, 'add_external_link_admin_submenu' ) , 100 );

  }




  public function virtual_factory_view_settings_page() {
    // Add the menu item and page
    $page_title = 'Virtual Factory';
    $menu_title = 'Virtual Factory';
    $capability = 'read';
    $slug = 'virtual_factory_view';
    $callback = array( $this, 'virtual_factory_view_page_content' );
    $icon = 'dashicons-admin-multisite';
    $position = 100;
    add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
  }



  public function virtual_factory_view_page_content() {
    $date = new DateTime(  ); ?>
    <div class="wrap">

      <h2><?php echo _e('Virtual Factory View', 'ilo-ee-ajaarvestus-template' ); ?></h2>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <div id="chart_div"></div>
      <script>
      jQuery(document).ready(function( $ ) {
          google.charts.load('current', {'packages':['gantt']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Task ID');
          data.addColumn('string', 'Task Name');
          data.addColumn('string', 'Resource');
          data.addColumn('date', 'Start Date');
          data.addColumn('date', 'End Date');
          data.addColumn('number', 'Duration');
          data.addColumn('number', 'Percent Complete');
          data.addColumn('string', 'Dependencies');

          data.addRows([
          ['2019Spring', 'Company 1', 'spring',
           new Date(2019, 2, 22), new Date(2019, 5, 20), null, 100, null],
          ['2019Summer', 'Company 2', 'summer',
           new Date(2019, 5, 21), new Date(2019, 8, 20), null, 100, null],
          ['2019Autumn', 'Company 3', 'autumn',
           new Date(2019, 8, 21), new Date(2019, 11, 20), null, 100, null],
          ['2019Winter', 'Company 4', 'winter',
           new Date(2019, 11, 21), new Date(2019, 2, 21), null, 100, null],
          ['2019Spring', 'Company 5', 'spring',
           new Date(2019, 2, 22), new Date(2019, 5, 20), null, 50, null],

          ]);

          var options = {
          height: 400,
          gantt: {
            trackHeight: 30
          }
          };

          var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

          chart.draw(data, options);
        };
        });
      </script>





    </div>
   <?php
  }




  }
new Virtual_Factory_View();
