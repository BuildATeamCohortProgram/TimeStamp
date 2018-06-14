/* ajax.php
Will be used for form processing, and other small requests to send to the database
*/

// all endpoints will be baised on form submission url
switch($_SERVER['QUERY_STRING']) {
  case 'eventForm':
  // event form submission
  break;
  case 'fbauth':
    // facebook authentication
  break;
  case 'googleauth':
    // google authentication
  break;
  case 'updateEventTitle':
    // ajax request to update event title
  break;
}
