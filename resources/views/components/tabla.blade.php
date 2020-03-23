<!-- Filtro -->
<form method="GET" action="{{ route('home') }}">
    <div class="form-row mb-4">
        <div class="col">
            <select class="custom-select custom-select-sm selects-filtro" name="cantidad">
                <option selected>Cantidad</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
        </div>
        <div class="col">
            <select class="custom-select custom-select-sm selects-filtro" name="campo">
                <option selected>Campo</option>
                    @foreach($cabeceras as $nombre => $valor)
                        <option value="{{ $valor }}">{{ $nombre }}</option>  
                    @endforeach    
              </select>
        </div>
        <div class="col">
            <select class="custom-select custom-select-sm selects-filtro" name="orden">
                <option selected>Orden</option>
                <option value="ASC">Ascendente</option>
                <option value="DESC">Descendente</option>
              </select>
        </div>  
        <div class="col">
            <!-- Last name -->
            <button type="submit" class="btn btn-sm btn-primary">Filtrar</button>
        </div>       
    </div>    
</form> 


<!-- Tabla -->
<div>
    <table class="table table-sm table-hover table-bordered ">
        <thead class="black white-text">           
            <tr>
                @foreach($cabeceras as $nombre => $valor)
                    <th scope="col">{{ $nombre }}</th>   
                @endforeach                                                         
            </tr>            
        </thead>
        <tbody>
            @foreach($coleccion as $item)
                @include($ruta)   
            @endforeach                 
        </tbody>
    </table>
</div>
