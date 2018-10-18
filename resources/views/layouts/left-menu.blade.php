<!-- Left menú -->
<div class="col-lg-2 left-menu" id="left-menu">
    <!-- Info pagina -->
    <div class="info-pagina text-md-center">
        <div class="row">
            <div class="col-md-center col-lg-12 pt-3 text-lg-center">
                <h5 class="login-user">Usuario</h5>
                <?php if(isset($_SESSION['admin'])): ?>
                    <p class="small role"><i class="material-icons">verified_user</i> Administrador</p>
                <?php elseif(isset($_SESSION['cobrador'])): ?>
                    <p class="small role"><i class="material-icons">supervisor_account</i> Cobrador</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="list-menu">
        <div class="row">
            <div class="col-lg-12">
                <ul class="menu">
                    <li>
                        <a href="" class="d-flex align-items-center"><i class="material-icons icono-left">account_balance</i> Inicio</a>
                    </li>

                    <li>
                        <a href="javascript:;" id="open_usuario" class="d-flex align-items-center"><i class="material-icons icono-left">face</i> Usuarios
                        <i class="derecha"><span class="material-icons">keyboard_arrow_right</span></i>
                        </a>
                        <ul id="usuario">
                            <li>
                                <a href="">Nuevo Usuario</a>
                            </li>
                            <li>
                                <a href="">Ver Usuario</a>
                            </li>
                        </ul>
                    </li>                  
                    <li>
                        <a href="javascript:;" id="open_cliente" class="d-flex align-items-center"><i class="material-icons icono-left">account_box</i> Clientes
                        <i class="derecha"><span class="material-icons">keyboard_arrow_right</span></i>
                        </a>
                        <ul id="cliente">
                            <li>
                                <a href="">Nuevo clientes</a>
                            </li>
                            <li>
                                <a href="">Ver clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" id="open_prestamo" class="d-flex align-items-center"><i class="material-icons icono-left">account_balance_wallet</i> Prestamo
                            <i class="derecha"><span class="material-icons">keyboard_arrow_right</span></i>
                        </a>
                        <ul id="prestamo">
                            <li>
                                <a href="">Nuevo Prestamo</a>
                            </li>
                            <li>
                                <a href="">Ver Prestamos</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="d-flex align-items-center">
                        <i class="material-icons icono-left">attach_money</i> Cobros</a>
                    </li>
                    <li>
                        <a href="" class="d-flex align-items-center">
                        <i class="material-icons icono-left">monetization_on</i> Contabilidad</a>
                    </li>
                    <li>
                        <a href="javascript:;" id="open_ajustes" class="d-flex align-items-center"><i class="material-icons icono-left">settings</i> Ajustes
                            <i class="derecha"><span class="material-icons">keyboard_arrow_right</span></i>
                        </a>
                        <ul id="ajustes">
                            <li>
                                <a href="">Empresa</a>
                            </li>
                            <li>
                                <a href="{{ route('ruta.index') }}">Rutas de pago</a>
                           </li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="d-flex align-items-center"><i class="material-icons icono-left">refresh</i> Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="footer-left-menu">
      <p>&copy; 2018 Sistemas Gerenciales - <strong> Carlos Díaz</strong></p>
    </footer>
</div>