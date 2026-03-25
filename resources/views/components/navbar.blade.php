<nav class="bg-blue-900 text-white px-4 py-3 shadow">
    <div class="container mx-auto flex items-center justify-between">
        <a href="{{ route('dashboard.cliente') }}" class="font-bold text-xl">MecaTiendas</a>

        <div class="space-x-4">
            <a href="{{ route('dashboard.cliente') }}" class="hover:text-gray-200">Inicio</a>
            @auth
                <a href="{{ route('usuarios.index') }}" class="hover:text-gray-200">Usuarios</a>
                <a href="{{ route('dashboard.empleado') }}" class="hover:text-gray-200">Empleado</a>
                <a href="{{ route('dashboard.gerente') }}" class="hover:text-gray-200">Gerente</a>
                <a href="{{ route('profile.edit') }}" class="hover:text-gray-200">Perfil</a>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="hover:text-gray-200">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="hover:text-gray-200">Registrarse</a>
            @endguest
        </div>
    </div>
</nav>