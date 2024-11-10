<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Starmax <sup>v</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Panel Principal</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Sistema
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAlmacen"
        aria-expanded="true" aria-controls="collapseAlmacen">
        <i class="fas fa-fw fa-warehouse"></i>
        <span>Almacen</span>
    </a>
    
    <div id="collapseAlmacen" class="collapse" aria-labelledby="headingAlmacen" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Componentes de Almacen:</h6>
            <a class="collapse-item" href="productos.html"><i class="fas fa-box me-2" style="margin-right: 10px;"></i>Productos</a>
            <a class="collapse-item" href="{{ route('categorias.index') }}"><i class="fas fa-tags me-2" style="margin-right: 10px;"></i>Categorías</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIngresos"
        aria-expanded="true" aria-controls="collapseIngresos">
        <i class="fas fa-fw fa-cart-plus"></i>
        <span>Ingresos</span>
    </a>
    
    <div id="collapseIngresos" class="collapse" aria-labelledby="headingIngresos" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Componentes de Ingresos:</h6>
            <a class="collapse-item" href="compras.html">Compras</a>
            <a class="collapse-item" href="proveedores.html">Proveedores</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentas"
        aria-expanded="true" aria-controls="collapseVentas">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Ventas</span>
    </a>
    
    <div id="collapseVentas" class="collapse" aria-labelledby="headingVentas" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Componentes de Ventas:</h6>
            <a class="collapse-item" href="ventas.html">Ventas</a>
            <a class="collapse-item" href="clientes.html">Clientes</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Seguridad
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeguridad"
        aria-expanded="true" aria-controls="collapseSeguridad">
        <i class="fas fa-fw fa-shield-alt"></i>
        <span>Seguridad</span>
    </a>
    
    <div id="collapseSeguridad" class="collapse" aria-labelledby="headingSeguridad" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Componentes de Seguridad:</h6>
            <a class="collapse-item" href="usuarios.html">Usuarios</a>
            <a class="collapse-item" href="roles.html">Roles</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Reporteria
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReportes"
        aria-expanded="true" aria-controls="collapseReportes">
        <i class="fas fa-fw fa-chart-line"></i> <!-- Cambié el ícono a uno relacionado con reportes -->
        <span>Reportes</span>
    </a>
    
    <div id="collapseReportes" class="collapse" aria-labelledby="headingReportes" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tipo de reportes:</h6>
            <a class="collapse-item" href="reporte-ventas.html">Reporte de ventas</a>
            <a class="collapse-item" href="reporte-clientes.html">Reporte de clientes</a>
            <a class="collapse-item" href="reporte-productos.html">Reporte de productos</a>
            <a class="collapse-item" href="reporte-ganancias.html">Reporte de ganancias</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="{{ asset('img/undraw_rocket.svg') }}" alt="...">
    <p class="text-center mb-2"><strong>STARMAX </strong>Si quiere mas informacion acerca de un Administrador</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Contactar Administrador</a>
</div>

</ul>