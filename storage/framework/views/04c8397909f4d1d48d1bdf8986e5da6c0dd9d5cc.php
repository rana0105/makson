<?php echo Html::script('assets/vendor/jquery/dist/jquery.min.js'); ?>

<?php echo Html::script('assets/vendor/bootstrap/dist/js/bootstrap.min.js'); ?>

<?php echo Html::script('assets/vendor/jquery-ui/jquery-ui.min.js'); ?>

<?php echo Html::script('assets/vendor/bootstrap4-select/dist/js/bootstrap-select.min.js'); ?>

<?php echo Html::script('assets/vendor/datatables/media/js/jquery.dataTables.min.js'); ?>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php echo Html::script('assets/src/js/app.js'); ?>

<?php echo Html::script('js/main.js'); ?>

  	<script type="text/javascript">
        //image upload
        document.getElementById('getval').addEventListener('change', readURL, true);
        function readURL(){
            var file = document.getElementById("getval").files[0];
            var reader = new FileReader();
            reader.onloadend = function(){
                document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
            }
            if(file){
                reader.readAsDataURL(file);
            }else{
            }
        }
        
    </script>