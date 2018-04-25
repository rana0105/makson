<?php echo Html::script('assets/vendor/jquery/dist/jquery.min.js'); ?>

<?php echo Html::script('assets/vendor/bootstrap/dist/js/bootstrap.min.js'); ?>

<?php echo Html::script('jassets/vendor/bootstrap4-select/dist/js/bootstrap-select.min.js'); ?>

<?php echo Html::script('assets/vendor/datatables/media/js/jquery.dataTables.min.js'); ?>

<?php echo Html::script('assets/vendor/jquery-ui/jquery-ui.min.js'); ?>

<?php echo Html::script('assets/src/js/app.js'); ?>


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