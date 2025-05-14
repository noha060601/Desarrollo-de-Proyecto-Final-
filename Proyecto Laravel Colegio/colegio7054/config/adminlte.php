<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Colegio 7054',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Colgio </b>7054',
    'logo_img' => 'vendor/adminlte/dist/img/insig1.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Colegio Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/insig1.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration. Currently, two
    | modes are supported: 'fullscreen' for a fullscreen preloader animation
    | and 'cwrapper' to attach the preloader animation into the content-wrapper
    | element and avoid overlapping it with the sidebars and the top navbar.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'mode' => 'fullscreen',
        'img' => [
            'path' => 'vendor/adminlte/dist/img/insig1.png',
            'alt' => 'AdminLTE Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-purple',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type' => 'navbar-search',
            'text' => 'search',
            'topnav_right' => true,
        ],
        [
            'type' => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'blog',
            'url' => 'admin/blog',
            'can' => 'manage-blog',
        ],

        ['header' => 'CONFIGURACIÓN DE LA CUENTA'],
        [
            'text' => 'perfil ',
            'url' => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'cambio de contraseña',
            'url' => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        //apartado de los profesores
        [
            'text' => 'paginas profesores  ',
            'icon' => 'fas fa-fw fa-share',
            'submenu' => [

                //capacitaciones
                [
                    'text' => 'capacitaciones ',
                    'submenu' => [
                        [
                            'text' => 'capacitacion actuales ',
                            'url' => 'pagina_profesor/capacitacion/capaprofesor',
                        ],
                        [
                            'text' => ' capacitaciones transcurridas  ',
                            'url' => 'pagina_profesor/capacitacion/historialcapa',

                        ]
                    ],
                ],
                //capacitaciones en linea
                [
                    'text' => 'capacitaciones en vivo  ',
                    'submenu' => [
                        [
                            'text' => 'capacitacion actual  ',
                            'url' => 'pagina_profesor/capacitacion_en_vivo/envivoprofesor',
                        ],
                        [
                            'text' => 'capacitacion grabada   ',
                            'url' => 'pagina_profesor/capacitacion_en_vivo/grabadaprofesor',

                        ],
                    ],
                ],
                //horario de clases
                [
                    'text' => 'horario de las capacitaciones   ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'horario detallado   ',
                            'url' => 'pagina_profesor/horario_de_capacitacion',
                        ],

                    ],
                ],
                //recursos academicos
                [
                    'text' => 'Recursos Academicos  ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Reserva de patios y laboratorios     ',
                            'url' => 'pagina_profesor/recursos_academicos/reservadepatioylaoratorio',
                        ],
                        [
                            'text' => ' Reserva de libros  ',
                            'url' => 'pagina_profesor/recursos_academicos/reservadelbrosymateriales',
                        ],
                        [
                            'text' => ' Registro de incidencias  ',
                            'url' => 'pagina_profesor/recursos_academicos/incidencia_aula',
                        ],

                    ],
                ],
                //resultados
                [
                    'text' => 'Notas del profesor  ',
                    'submenu' => [
                        [
                            'text' => 'Notas de evaluacion Pedagogicas    ',
                            'url' => 'pagina_profesor/notas_de_profesor/reporteugel',
                        ],
                        [
                            'text' => ' Reporte evaluacion estudiantil ',
                            'url' => 'pagina_profesor/notas_de_profesor/reportestudiantil',
                        ],


                    ],
                ],

            ],
        ],
        //apartado de los alumnos
        [
            'text' => 'paginas alumnos   ',
            'icon' => 'fas fa-fw fa-share',
            'submenu' => [

                [
                    'text' => 'cursos  ',
                    'submenu' => [
                        [
                            'text' => 'cursos actuales ',
                            //pagina estudiante  carpeta general y la subcarpeta capacitacion es la direccion de donde se obtine la vista
                            'url' => 'pagina_estudiante/capacitacion/capacitacionactual',
                        ],
                        [
                            'text' => ' cursos transcurridas  ',
                            'url' => 'pagina_estudiante/capacitacion/transcur',

                        ],
                        [
                            'text' => '  cursos autoinformativos  ',
                            'url' => 'pagina_estudiante/capacitacion/auto',

                        ],
                    ],
                ],
                [
                    'text' => 'cursos en vivo  ',
                    'submenu' => [
                        [
                            'text' => 'clases actuales  ',
                            'url' => 'pagina_estudiante/capacitacion_en_vivo/en_vivo',
                        ],
                        [
                            'text' => 'clases guardadas    ',
                            'url' => 'pagina_estudiante/capacitacion_en_vivo/grabadas',

                        ],
                    ],
                ],
                [
                    'text' => 'horario escolar 2024  ',
                    'submenu' => [
                        [
                            'text' => 'horario detallado   ',
                            'url' => 'pagina_estudiante/horario_cursos',
                        ],

                    ],
                ],
                [
                    'text' => 'Recursos estudiantiles   ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Reserva de talleres     ',
                            'url' => 'pagina_estudiante/recursos_academicos/talleres',
                        ],
                        [
                            'text' => ' Reserva de libros  ',
                            'url' => 'pagina_estudiante/recursos_academicos/libros',
                        ],
                        [
                            'text' => ' Registro de incidencias dentro del aula   ',
                            'url' => 'pagina_estudiante/recursos_academicos/incidencias',
                        ],

                    ],
                ],
                [
                    'text' => 'Notas del estudiante   ',
                    'submenu' => [
                        [
                            'text' => 'Notas del bimestre      ',
                            'url' => 'pagina_estudiante/notas_de_estudiante/bimestre',
                        ],
                        [
                            'text' => ' Record academico ',
                            'url' => 'pagina_estudiante/notas_de_estudiante/notas',
                        ],
                        [
                            'text' => ' Notas actitudinal   ',
                            'url' => 'pagina_estudiante/notas_de_estudiante/actitudinal',
                        ],

                    ],
                ],

            ],
        ],
        //apartado del director
        [
            'text' => 'paginas director   ',
            'icon' => 'fas fa-fw fa-share',
            'submenu' => [

                [
                    'text' => 'Gestion Academica ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Planificación de cursos ',
                            'url' => '#',
                        ],
                        [
                            'text' => ' Control de calificaciones  ',
                            'url' => '#',

                        ],
                        [
                            'text' => '  Asignación de docentes  ',
                            'url' => '#',

                        ],
                    ],
                ],
                [
                    'text' => 'Gestión de Estudiantes  ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Matrículas  ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Expedientes  ',
                            'url' => '#',

                        ],
                        [
                            'text' => 'Seguimiento académico   ',
                            'url' => '#',

                        ],
                    ],
                ],
                [
                    'text' => 'Gestión de Docentes  ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Datos del Personal  ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Horarios  ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Seguimiento de Evaluaciones ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Asignacion de Cursos  ',
                            'url' => '#',
                        ],

                    ],
                ],
                [
                    'text' => 'Reportes  ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Reportes de incidencias     ',
                            'url' => '#',
                        ],
                        [
                            'text' => ' Reportes asistencias   ',
                            'url' => '#',
                        ],
                        [
                            'text' => ' Reporte libretas    ',
                            'url' => '#',
                        ],

                    ],
                ],
                [
                    'text' => 'Configuraciones   ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Configuración del sistema ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Usuarios y permisos',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Certificados y documentos',
                            'url' => '#',
                        ],

                    ],
                ],

            ],
        ],
        //apartado del apoderado
        [
            'text' => 'paginas apoderado    ',
            'icon' => 'fas fa-fw fa-share',
            'submenu' => [

                [
                    'text' => 'Informacion Academica ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Calificaciones del estudiante ',
                            'url' => '#',
                        ],
                        [
                            'text' => ' Asistencia del estudiante  ',
                            'url' => '#',

                        ],
                        [
                            'text' => '  Horarios del estudiante  ',
                            'url' => '#',

                        ],

                    ],
                ],
                [
                    'text' => 'Pagos y finanzas   ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'Estado de cuentas   ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Realizar pagos de matricula  ',
                            'url' => '#',

                        ],
                        [
                            'text' => 'Solicitud de becas   ',
                            'url' => '#',

                        ],
                    ],
                ],
                [
                    'text' => 'Documentos  ',
                    'url' => '#',
                    'submenu' => [
                        [
                            'text' => 'certificados y constancias  ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Boletas de notas   ',
                            'url' => '#',
                        ],
                        [
                            'text' => 'Autorizaciones y solicitus de salidas ',
                            'url' => '#',
                        ]

                    ],
                ],


            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
