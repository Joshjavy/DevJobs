<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800" "> {{ $vacante->titulo}} </h3>
    
        <div class="md:grid md:grid-cols-2 bg-gray-100 p-4 my-10">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Empresa: <span class=" normal-case font-normal"> {{ $vacante->empresa }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                último día para postularse: <span class=" normal-case font-normal"> {{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Categoría: <span class=" normal-case font-normal"> {{ $vacante->categoria->categoria }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">
                Salario: <span class=" normal-case font-normal"> {{ $vacante->salario->salario }}</span>
            </p>
        </div>
    </div>
    
    <div class="md:grid md:grid-cols-6 gap-4">

        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/'.$vacante->imagen)}}" alt="{{'Imagen vacante '.$vacante->titulo}}"/>
        </div>

        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5"> Descripcion del puesto</h2>
            <P>{{$vacante->descripcion}}</P>
        </div>

    </div>

    </div>

