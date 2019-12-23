<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{!! route('clientes.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('transportistas*') ? 'active' : '' }}">
    <a href="{!! route('transportistas.index') !!}"><i class="fa fa-edit"></i><span>Transportistas</span></a>
</li>

<li class="{{ Request::is('paquetes*') ? 'active' : '' }}">
    <a href="{!! route('paquetes.index') !!}"><i class="fa fa-edit"></i><span>Paquetes</span></a>
</li>

<li class="{{ Request::is('envios*') ? 'active' : '' }}">
    <a href="{!! route('envios.index') !!}"><i class="fa fa-edit"></i><span>Envios</span></a>
</li>

