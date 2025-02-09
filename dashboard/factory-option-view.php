<?php
class Factory_View
{



  public function __construct()
  {

    add_action( 'admin_menu', array( $this, 'factory_view_settings_page' ) );
    //add_action( 'admin_menu', array( $this, 'add_external_link_admin_submenu' ) , 100 );

  }




  public function factory_view_settings_page() {
    // Add the menu item and page
    $page_title = 'Factory';
    $menu_title = 'Factory';
    $capability = 'read';
    $slug = 'factory_view';
    $callback = array( $this, 'factory_view_page_content' );
    $icon = 'dashicons-building';
    $position = 100;
    add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );
  }



  public function factory_view_page_content() {
    $date = new DateTime(  ); ?>
    <div class="wrap">

      <div id='calendar'></div>
      <div id='datepicker'></div>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="description" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="description" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="https://fullcalendar.io/js/fullcalendar-3.0.1/fullcalendar.min.css">
      <link rel="description" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/css/bootstrap-datetimepicker.min.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/js/bootstrap-datetimepicker.min.js"></script>


      <div id='calendar'></div>
      <div id='datepicker'></div>

      <div class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Create new event</h4>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-xs-12">
                              <label class="col-xs-4" for="title">Event title</label>
                              <input type="text" name="title" id="title" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xs-12">
                              <label class="col-xs-4" for="starts-at">Starts at</label>
                              <input type="text" name="starts_at" id="starts-at" />
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xs-12">
                              <label class="col-xs-4" for="ends-at">Ends at</label>
                              <input type="text" name="ends_at" id="ends-at" />
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="save-event">Save changes</button>
                  </div>
              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <script>
      jQuery(document).ready(function( $ ) {

          $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2016-09-12',
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                // Display the modal.
                // You could fill in the start and end fields based on the parameters
                $('.modal').modal('show');

            },
            eventClick: function(event, element) {
                // Display the modal and set the values to the event values.
                $('.modal').modal('show');
                $('.modal').find('#title').val(event.title);
                $('.modal').find('#starts-at').val(event.start);
                $('.modal').find('#ends-at').val(event.end);

            },
            editable: true,
            eventLimit: true // allow "more" link when too many events

        });

        // Bind the dates to datetimepicker.
        // You should pass the options you need
        $("#starts-at, #ends-at").datetimepicker();

        // Whenever the user clicks on the "save" button om the dialog
        $('#save-event').on('click', function() {
            var title = $('#title').val();
            if (title) {
                var eventData = {
                    title: title,
                    start: $('#starts-at').val(),
                    end: $('#ends-at').val()
                };
                $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
            }
            $('#calendar').fullCalendar('unselect');

            // Clear modal inputs
            $('.modal').find('input').val('');

            // hide modal
            $('.modal').modal('hide');
        });
    });
      </script>





    </div>
   <?php
  }




  }
new Factory_View();
