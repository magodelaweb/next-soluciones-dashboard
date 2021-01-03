<script src="{{asset("assets/lib/jquery/jquery.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js")}}" type="text/javascript"></script>
<script src="{{asset("js/app.js")}}" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //-initialize the javascript
    App.init();
  });
  function logout(event){
    event.preventDefault();
    $("#frmLogout")[0].submit();
  }
</script>
