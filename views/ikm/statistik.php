<style>
	.mz-module-about{
		min-height: 180px;
	}
</style>
<section id="prosedur" class="light-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div>
					<h2 style="color: black; font-weight: bold;">Statistik Indeks Kepuasan Masyarakat</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php include_once('selectikm.php'); ?>
		</div>
		<div class="row">
			<!-- about module -->
			<div class="col-md-12 text-center">

				<div class="col-md-3 col-sm-12 col-xs-12 text-center" id="nilai_ikm">

					<h3></h3>

					<div class="mz-module">
						<div class="mz-module-about">

							<div class="card" style="margin-top: 2%">

							  <div class="card-body">

							  	<h1 style="font-size: 50pt"></h1>

							  </div>

							</div>

						</div>
					</div>

				</div>

				<div class="col-md-3 col-sm-12 col-xs-12 text-center" id="total_responden">

					<h3></h3>

					<div class="mz-module">
						<div class="mz-module-about">

							<div class="card" style="margin-top: 2%">

							  <div class="card-body">

							  	<h1 style="font-size: 50pt"></h1>

							  </div>

							</div>

						</div>
					</div>

				</div>

				<div class="col-md-3 col-sm-12 col-xs-12 text-center" id="layanan_kh">

					<h3></h3>

					<div class="mz-module">
						<div class="mz-module-about">

							<div class="card" style="margin-top: 2%">

							  <div class="card-body">

							  	<h1 style="font-size: 50pt"></h1>

							  </div>

							</div>

						</div>
					</div>

				</div>

				<div class="col-md-3 col-sm-12 col-xs-12 text-center" id="layanan_kt">

					<h3></h3>

					<div class="mz-module">
						<div class="mz-module-about">

							<div class="card" style="margin-top: 2%">

							  <div class="card-body">

							  	<h1 style="font-size: 50pt"></h1>

							  </div>

							</div>

						</div>
					</div>

				</div>

			</div>
			<!-- end about module -->
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">

				<div class="x_panel">

				  <div class="x_content">

				  	<div id="rata-rata"></div>

				  </div>

				</div>

			</div>



		<div class="col-md-6 col-sm-12 col-xs-12">

			<div class="x_panel">

			  <div class="x_content">

			  	<div id="jenis_kelamin"></div>

			  </div>

			</div>

		</div>



		<div class="clearfix"></div>



		<div class="col-md-4 col-sm-12 col-xs-12">

			<div class="x_panel">

			  <div class="x_content">

			  	<div id="umur"></div>

			  </div>

			</div>

		</div>



		<div class="col-md-4 col-sm-12 col-xs-12">

			<div class="x_panel">

			  <div class="x_content">

			  	<div id="pendidikan"></div>

			  </div>

			</div>

		</div>



		<div class="col-md-4 col-sm-12 col-xs-12">

			<div class="x_panel">

			  <div class="x_content">

			  	<div class="row">

			  		<div id="pekerjaan"></div>

			  	</div>

			  </div>

			</div>

		</div>

		</div>

		<div class="row">
			<div class="col-md-6">
				<i><a href="https://ikm.skp1sumbawabesar.org/home" target="_blank" rel="noreferrer">Ikuti survey ikm dengan klik tautan berikut</a></i>
				<p></p>
				<i>Sumber : <a href="https://e-office.skp1sumbawabesar.org" target="_blank" rel="noreferrer">e-office (e-ikm) Sumbawa</a></i>
				<p></p>
				
			</div>
		</div>
	</div>
	<!-- /.container -->
</section>

<script>

	let id = $('#select_ikm').val();

	let url =  mainApiUrl + '/statistik/grafik/' +  id;

	changeIkmPeriod(url);

	$('#select_ikm').on('change', function(){

		let id = $(this).val();

		id = $(this).val();

		url = mainApiUrl + '/statistik/grafik/' +  id;

		changeIkmPeriod(url);

	});

	function changeIkmPeriod(url)
	{
		$.ajax({

			url : url,

		}).done(function(response){

			let umur = {

				title : '',

				data : []

			};

			let pendidikan = {

				title : '',

				data : []

			};


			let pekerjaan = {

				title : '',

				data : []
			};

			let rata_rata = {

				title : 'Rata-rata Nilai Per Unsur Pelayanan',

				subtitle : response.data[1].keterangan,

				series_name : 'Nilai rata-rata',

				data : [],

				xAxis : []
			};

			let jenis_kelamin = {

				title : 'Jumlah Responden Berdasarkan Jenis Kelamin',

				subtitle : response.data[1].keterangan,

				series_name : 'Responden',

				data : [

					response.jenis_kelamin.Laki_laki,

					response.jenis_kelamin.Perempuan

				],

				xAxis : Object.keys(response.jenis_kelamin)

			}

			let arr_nilai_ikm = [];

			/*Set Chart Datas Rata - rata Perunsur*/
			$.each(response.data, function(key, value){

				arr_nilai_ikm.push(parseFloat(value.rataRataPerUnsurPelayanan));

				rata_rata.xAxis.push(value.unsur_pelayanan);

				rata_rata.data.push(parseFloat(value.rataRataNrr));

			});

			/*Set Chart Datas Umur*/
			$.each(response.umur, function(key, value){

				/*Perbedaan pie dan bar chart - push object baru ke dalam array data*/

		        umur.data.push({

	     	  		name : key,

	    			y : value

		        });

		        umur.title = `Data Responden ${response.data[1].keterangan} Berdasarkan Umur`;
			});

			/*Set Chart Datas Pendidikan*/
			$.each(response.pendidikan, function(key, value){

		        pendidikan.data.push({

	     	  		name : key,

	    			y : value

		        });

		        pendidikan.title = `Data Responden ${response.data[1].keterangan} Berdasarkan Pendidikan`;

			});

			/*Set Chart Datas Pekerjaan*/
			$.each(response.pekerjaan, function(key, value){

		        pekerjaan.data.push({

	     	  		name : key,

	    			y : value

		        });

		        pekerjaan.title = `Data Responden ${response.data[1].keterangan} Berdasarkan Pekerjaan`;

			});

			/*Hightchart colors option*/
			Highcharts.setOptions({

		        colors: [

		         '#ffcc00', '#24CBE5', '#bf80ff',  '#64E572', '#FFF263', '#FF9655', '#6AF9C4' 

		       ]

	     	});

	     	/*Jumlah Rata-rata Nilai IKM*/
			let total = arr_nilai_ikm.reduce(getSum);

			/*Total Nilai IKM*/
			let nilai_ikm = total * 25;

			/*Init Charts*/
			barColumnChart('#rata-rata', rata_rata, 'spline');

			barColumnChart('#jenis_kelamin', jenis_kelamin, 'column');

			pieChart('#umur', umur);

			pieChart('#pendidikan', pendidikan);

			pieChart('#pekerjaan', pekerjaan);

			/*Data Responden, IKM, etc to HTML*/
			/*Nilai total IKM*/
			$('#nilai_ikm h3').html(`

				IKM Unit Pelayanan

			`);

			$('#nilai_ikm .card-body h1').html(`

				${nilai_ikm.toFixed(3)}				

			`);

			/*Total responden*/
			$('#total_responden h3').html(`

				Total Responden

			`);

			$('#total_responden .card-body h1').html(`

				${response.data[1].totalResponden}

			`);

			/*Layanan Kh*/
			$('#layanan_kh h3').html(`

				Responden KH

			`);

			$('#layanan_kh h1').html(`

				${typeof(Object.values(response.layanan)[0]) == "undefined" ? 0 : Object.values(response.layanan)[0]}

			`);

			/*Layanan Kt*/
			$('#layanan_kt h3').html(`

				Responden KT

			`);

			$('#layanan_kt h1').html(`

				${typeof(Object.values(response.layanan)[1]) == "undefined" ? 0 : Object.values(response.layanan)[1]}

			`);

			/*Pie Charts Function*/
			function pieChart(container, data){

		      	let chart = {

	             	plotBackgroundColor: null,

	             	plotBorderWidth: null,

	             	plotShadow: false

		      	};

		      	let title = {

		         	text: data.title    

		      	};  

		      	let tooltip = {

		         	pointFormat: '{series.name}: <b>{point.y}</b>'
		      	};

		      	let plotOptions = {

		        	pie: {

			            allowPointSelect: true,

			            cursor: 'pointer',

			            dataLabels: {

			               enabled: true           

			            },

			            showInLegend: true

			         }

		      	};

		      	let credits =  false;

		      	let series = [{

			        type: 'pie',

			        name: 'Jumlah Responden',

			        data: data.data

			    }];

		      	let json = {};   

			        json.chart = chart; 

			        json.title = title;     

			        json.tooltip = tooltip;  

			        json.series = series;

			        json.credits = credits;

			        json.plotOptions = plotOptions;

			        $(container).highcharts(json);


		    }

		    /*Bar Charts Function*/
			function barColumnChart(container, data, type){

		      	let credits = false;

			    let chart = {

			        type: type

			    };

			    let title = {

			        text: data.title

			    };

			    let subtitle = {

			        text: data.subtitle

			    };

			    let xAxis = {

			        categories: data.xAxis

			    };

			    let yAxis = {

			        title: {

			            text: 'Nilai'
			        }
			    };

			    let tooltip = {

			        crosshairs: true,

			        shared: true

			    };

			    let plotOptions = {

			        spline: {

			            marker: {

			                radius: 4,

			                lineColor: '#666666',

			                lineWidth: 1

			            }

			        }

			    };

			    let series = [{

			        name: data.series_name,

			        marker: {

			            symbol: 'square'

			        },

			        data: data.data

			    }];

		      	let json = {};   

			        json.chart = chart; 

			        json.title = title; 

			        json.subtitle = subtitle; 

			        json.xAxis = xAxis;

			        json.yAxis = yAxis;   

			        json.tooltip = tooltip;  

			        json.series = series;

			        json.credits = credits;

			        json.plotOptions = plotOptions;

			        $(container).highcharts(json);

		    }

		    /*Sum Function*/
			function getSum(total, num) {

		    	return total + num;

			}

	    });/*End ajax*/
	}


</script>