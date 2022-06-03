<main role="main" class="col-lg-12 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2 col-lg-6"><?= $title ?></h1>
        	<div class="input-group rounded">
				<input method="post" type="search" id="buscaMlb" class="form-control rounded p-2 col-lg-4 ml-8" placeholder="Busca por MLB" aria-label="Search" aria-describedby="search-addon" />
				<span class="input-group-text border-0 ml-2" id="search-addon">
				<i id="btnBuscarMlb" class="fas fa-search" type="button"></i>
        		</span>
        	</div>
	</div>


	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>site_id</th>
					<th>country_default_time_zone</th>
					<th>total</th>
					<th>limit</th>
					<th>id</th>
					<th>Preço</th>
					<th>name</th>
				</tr>
				
			</thead>
			<tbody id="tdTabelaClienteId"></tbody>
        </table>

	</div>
</main>

