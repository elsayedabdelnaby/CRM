<title>@yield('title', 'page_title')</title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="elsayed.fcis.1@gmail.com" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{!! url('/assets') !!}/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="{!! url('/assets') !!}/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{!! url('/assets') !!}/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/morris/morris.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="{!! url('/assets') !!}/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{!! url('/assets') !!}/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="{!! url('/assets') !!}/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<link rel="shortcut icon" href="favicon.ico" />
<script>
    window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
</script>