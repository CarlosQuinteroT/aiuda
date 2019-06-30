    
    @extends ('principal')
    @section ('contenido')

    <template v-if="menu==0">
        
    </template>

    <template v-if="menu==1">
        <categorias-component></categorias-component>
    </template>

    <template v-if="menu==2">
        <ingresos-component></ingresos-component>
    </template>
    <template v-if="menu==4">
        <proveedores-component></proveedores-component>
    </template>

    
    @endsection