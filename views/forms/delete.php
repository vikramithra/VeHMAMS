<?php 
$title = 'Delete user';
function get_content() {
?>

<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
     <!-- Modal content-->
     <div class="modal-content">

        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Modal Header</h4>
        </div>

        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>

        <div class="modal-footer">
          <button  id="<?php echo $id; ?>" href="deleteposthome.php?id='.$row['post_id'].'" type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

     </div>                                       
   </div>
</div>

<?php 
}
require_once '../partials/layout.php'

?>