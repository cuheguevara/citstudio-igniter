<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
        table
        {
            padding: 0px;
            margin: 0px;
        }
        th{
            background-color: #ABC546;
            font-weight: bold;
        }
        td{
            text-align: center;
        }
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
        <h1>INFO PENERBANGAN </h1>

	<div id="body">
        <?php //print_r($flight); ?>
        Data Penerbangan Dari <?php echo $flight['search_queries']['from'] ?> Ke <?php echo $flight['search_queries']['to'].'<br/>' ?>
        
        <p><b>INFORMASI BANDARA</b> </p>
        <table width="50%" >
            <tr>
                <td>&nbsp</td>  
                <th><?php echo $flight['search_queries']['from'] ?></th>  
                <th><?php echo $flight['search_queries']['to'] ?></th>  
            </tr>
            <tr>
                <th>NAMA BANDARA</th>  
                <td><?php echo $flight['go_det']['dep_airport']['business_name']; ?></td>
                <td><?php echo $flight['go_det']['arr_airport']['business_name']; ?></td>
            </tr>
            <tr>
                <th>KOTA, NEGARA</th>
                <td><?php echo $flight['go_det']['dep_airport']['city_name']; ?>, <?php echo $flight['go_det']['dep_airport']['country_name']; ?></td>
                <td><?php echo $flight['go_det']['arr_airport']['city_name']; ?>, <?php echo $flight['go_det']['arr_airport']['country_name']; ?></td>
            </tr>
            <tr>
                <th>LOKASI</th>
                <td><?php echo $flight['go_det']['dep_airport']['location_name']; ?></td>
                <td><?php echo $flight['go_det']['arr_airport']['location_name']; ?></td>
            </tr>
        </table>
        <br/>
        <b>JADWAL PENERBANGAN </b>
        <table width="50%">
            <tr>
                <th>MASKAPAI</th>
                <th>KODE PENERBANGAN</th>
                <th>JAM </th>
                <th>JAM TIBA</th>
                <th>DURASI</th>
                <th>HARGA</th>
            </tr>
        <?php foreach ($flight['departures']['result'] as $r) : ?>
            <tr>
                <td><img src="<?php echo $r['image']; ?>" alt="<?php echo $r['airlines_name']; ?>"/></td>
                <td><?php echo $r['flight_number']; ?></td>
                <td><?php echo $r['simple_departure_time']; ?></td>
                <td><?php echo $r['simple_arrival_time']; ?></td>
                <td><?php echo $r['duration']; ?></td>
                <td><?php echo $flight['diagnostic']['currency'].' '.$r['price_value']; ?></td>
            </tr>
        <?php endforeach; ?>
                
        </table>
        <pre>
        <?php  print_r($flight); ?>

        </pre>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>