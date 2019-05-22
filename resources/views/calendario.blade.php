<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas y Actividades</title>

  <link rel="stylesheet" type="text/css" href="calendar/css/bootstrap.min.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
    
    <link rel="stylesheet" href="calendar/css/fullcalendar.css"/>
    <script src="calendar/js/es.js"></script>
</head>
<style>

.Tamañocalendar{
    margin-top:5%;
    margin-left:19%;
    width:60%;
    height:60%;
   

}
        body {
          margin: 0;
          padding: 0;
          font-size: 14px;
        }

        #top,
        #calendar.fc-unthemed {
          font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        }

        #top {
          background: #eee;
          border-bottom: 1px solid #ddd;
          padding: 0 10px;
          line-height: 40px;
          font-size: 12px;
          color: #000;
        }

        #top .selector {
          display: inline-block;
          margin-right: 10px;
        }

        #top select {
          font: inherit; /* mock what Boostrap does, don't compete  */
        }

        .left { float: left }
        .right { float: right }
        .clear { clear: both }

        #calendar {
          max-width: 900px;
          margin: 40px auto;
          padding: 0 10px;
        }

      </style>
<body>


<div class="col-md-8 col-md-offset-2" >

<div class="panel panel-default">
<div class="panel-heading" style="#2e6da4; color:white;" >
    Agenda de Actividades [Bomberos]
</div>
<div class="panel-body">
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

</div>
</div>
</div>

</div>

</div>


</div>

</div>









</body>
</html>