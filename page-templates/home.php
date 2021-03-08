<?php
/*
 * Template Name: Home
 * 
 * Display home page and content is base on if user is logged in or logout
 */

get_header(); ?>

<?php if (is_user_logged_in()) : ?>
    <?php
       add_query_arg('step', '1');
    ?>

    <!-- Home page for logged in users -->
    <div class="intro grid-col--center">
        <h1 class="intro__heading heading-primary">Vítejte u nás ve společnosti</h1>
        <h2 class="intro__heading heading-secondary">
            Úvodní slovo HR ředitelky
        </h2>
        <div class="intro__highlight">
            <img src="/wp-content/uploads/hr-reditel-katarina-bobotova.png" alt="HR ředitelka" class="intro__photo">
            <p>Vážené kolegyně, vážení kolegové,</p>
            <p>vítejte v naší společnosti! Oslovuji Vás již jako kolegy, protože to, že jste došli až sem a čtete tyto řádky, znamená, že jste úspěšně prošli náročným výběrovým procesem a došlo mezi námi k oboustranné shodě o Vašem nástupu. Po formální stránce je již tedy Váš příchod k nám připraven. Zanedlouho se stanete rovnocennou součástí týmu zaměstnanců naší společnosti a mně je potěšením Vás zde přivítat.</p>
            <p>Naše společnost se nespokojí s průměrem. Věříme, že náš úspěch je zásluhou našich zaměstnanců, proto jejich výběru přikládáme velký význam. Vážíme si odbornosti, ale také pokory a schopnosti vložit do pracovní činnosti srdce. Je mi ctí přivítat v našich řadách další jedinečné osobnosti, které, jak věřím, těmito kvalitami disponují.</p>
            <p>Přeji vám úspěšný start a věřím, že v rámci naší společnosti budete moci nadále rozvíjet své profesní zkušenosti.</p>
            <p><b>Katarína Bobotová</b>, Chief HR and Strategy Officer</p>
        </div>
        <div class="intro__scroll-down btn-scroll">
            <svg xmlns="http://www.w3.org/2000/svg" width="88.418" height="46.33" viewBox="0 0 88.418 46.33">
                <path id="next-page-arrow" d="M1026.937,465.671l43.148,43.148-43.148,43.149" transform="translate(553.028 -1025.876) rotate(90)" fill="none" stroke="#c21b17" stroke-width="3"/>
            </svg>
        </div>
    </div>

    <main id="content" class="site-content grid grid-col--full">

        <?php
            $current_user = wp_get_current_user();
            $currentUserRoles = $current_user->roles;
            foreach ($currentUserRoles as $role) {

                switch ($role) {
                    case 'administrator':
                        print( get_field('hpp') );
                        break 2;
                    case 'gcp-hpp':
                        print( get_field('hpp') );
                        break 2;
                    case 'gcp-dpp':
                        print( get_field('dpp') );
                        break 2;
                    case 'gcd-hpp':
                        print( get_field('hpp') );
                        break 2;
                    case 'gcd-dpp':
                        print( get_field('dpp') );
                        break 2;
                } 
            }
        ?>
    
<?php else : ?>

    <!-- Home page for not logged in users -->

    <main class="welcome-page grid-col--full">
        <div class="welcome-page__logo-box">
            <svg class="welcome-page__logo" xmlns="http://www.w3.org/2000/svg" width="1386.134" height="233.254" viewBox="0 0 1386.134 233.254">
                <g id="Symbols" transform="translate(0 -0.323)">
                    <g id="pata" transform="translate(0 0.323)">
                        <g id="Group-63" transform="translate(0)">
                            <g id="Group_6" data-name="Group 6" transform="translate(0 0)">
                                <g id="Group-3" transform="translate(0 0)">
                                    <path id="Fill-1" d="M276.522,186.192a5.429,5.429,0,0,1,4.188-3.548l20.255-4.568-1.824-18.263-.066-.394c-.5-2.395-2-9.68-11.411-10.458-36.2-2.958-44.6-8.383-53.4-14.127a.5.5,0,0,1-.024-.083l-.059.021-.57-.372a37.515,37.515,0,0,0-19.651-6.171c-10.258.007-23.233,4.108-24.288,4.449-3.129.933-6.057,1.877-8.891,2.8-11.338,3.683-21.131,6.88-37.585,6.381l-3-.089-.774,2.932c-.59,2.261-5.193,20.644-.751,32.457-3.981,3.168-3.981,6.839-3.957,7.328.163,4.041-.779,5.035-1.092,5.36-1.9,1.989-8.2,2.256-13.521,2.256h-2l-1.135,1.579c-3.283,4.556-10.352,5.618-14.878,4.458-1.994-6.125-2.046-10.808-.128-13.6,2.266-3.3,7.079-3.655,9.03-3.655h1.145a8.8,8.8,0,0,0,8.717-8.865V139.11a37.031,37.031,0,0,0,3.672-7.886,16.608,16.608,0,0,0,14.025-16.29,16.321,16.321,0,0,0-2.574-8.781c7.348-3.573,13.624-10.876,13.624-20.441s-4.764-13.962-9.283-16.837a156.131,156.131,0,0,0,4.8-16.639l6.354-23.013c2.846-9.024,10.274-14.852,18.934-14.852H282.371c-4.739,6.741-11.47,9.931-20.8,9.931H193.829l-3.544,7.662H251c-4.771,7.669-11.748,11.283-21.669,11.283H185.313l-3.542,7.662h39.278c-4.762,7.383-11.661,10.871-21.4,10.871h-24l-3.544,7.662h25.161c.229.312.856,1.474.856,4.58A9.036,9.036,0,0,1,189,82.951a14.38,14.38,0,0,1-5.79-1.469c-1.111-.475-2.218-.952-3.332-1.427l-5.842,5.3c1.094.469,2.18.939,3.275,1.405,5.056,2.218,7.878,3.37,11.689,3.37a16.253,16.253,0,0,0,11.77-5.031c4.311.279,11.269.861,18,1.415,8.044.672,15.642,1.3,19.58,1.514,1.963.108,3.806.2,5.573.286,3.339.165,6.395.32,9.448.537,15.274,25.086,23.106,28.382,52.7,31.968,2.131,3.862,4.047,7.946,5.883,12.054v48.845l.01.279c.168,2.247.168,3-.134,3.411-1.029,1.362-5.6,3.289-7.187,3.951L279.7,198.864c-3.308-4.533-4.494-9.258-3.18-12.672Zm-5.394,13.263H221.816l21.13-22.55c4.264-4.456,5.628-9.816,3.837-15.08-1.035-3.037-3.822-8.858-6.723-14.826,8.388,3.943,21.1,7.488,46.988,9.592,3.112.265,3.938,1.336,4.554,4.2l1.135,11.293-13.523,3.049a13.023,13.023,0,0,0-9.769,8.282c-1.852,4.812-1.222,10.478,1.683,16.04Zm-88.944,0c-1.373-5.424-.818-9.751,1.631-12.581a9.755,9.755,0,0,1,8.483-3.165l14.415,2.7.361.065h2l10.189-11.1.092-.1c1.744-2.046,7.03-8.256,1.626-16.171l-13.608-22.686a47.873,47.873,0,0,1,6.607-.523l.089-.007a30.064,30.064,0,0,1,14.207,4.206c.993,2.147,2.374,4.976,3.906,8.12,2.86,5.856,6.42,13.148,7.4,16.094.318.923,1.288,3.741-2.131,7.3l-26.093,27.843Zm-4.092-17.621c-2.742,3.187-5.41,8.726-3.686,17.621H127.981c4.99-.5,8.607-1.677,11.116-4.306,3.039-3.2,3.309-7.567,3.2-10.689.1-.272.607-1.326,2.879-2.364l4-1.846-2.4-3.731c-3.964-6.162-2.239-19.632-.7-26.954h.359c15.737,0,25.928-3.3,36.664-6.794,2.806-.914,5.689-1.851,8.742-2.751l.094-.031c.059-.021,3.2-1.028,7.471-2.04l15.139,25.224.134.205c1.508,2.18,1.7,3.612-1.05,6.851l-7.582,8.271-12.44-2.333-.108-.019a17.307,17.307,0,0,0-15.416,5.684Zm-82.365-1.66c-3.23,4.689-3.627,11.164-1.2,19.281H86.69V137.538a32.753,32.753,0,0,0,8.644-2.545,63.108,63.108,0,0,1-1.019,7.691c-.12.663-.236,1.353-.364,2.092l-.748,4.468h4.5c6.715,0,11.72-1.061,15.566-3.072V172.02a1.164,1.164,0,0,1-1.128,1.2h-1.145c-6.666,0-12.227,2.534-15.264,6.954ZM79.092,192.743l-35.746-9.4-35.758,9.4V128.1l35.758-9.38,35.746,9.38Zm-66.907,6.712,31.161-8.2,31.159,8.2Zm12.461-95.168a9,9,0,0,1,9.181-3.548l3.24.566,1.008-3.151A4.617,4.617,0,0,1,39.231,96.2a5.4,5.4,0,0,1,4-1.226c4.566.153,10.288,3.368,14.934,8.406a41,41,0,0,1,4.53,6.107c.25.453.552.937.824,1.365.368.6.689,1.092.748,1.21.168.293,2.466,3.781,2.3,4.007,1.576-2.23,3.141-4.466,4.715-6.689.042-.065-.024-.267-.16-.559a32.074,32.074,0,0,0-1.682-2.875c-.118-.19-.234-.382-.361-.575,0-.014-.019-.035-.026-.045-.05-.081-.25-.413-.529-.847-.533-.83-1.279-2.027-1.616-2.688L76.8,85.8a27.885,27.885,0,0,0,5.578.6h.244C96.567,86.4,111,78.268,111,64.652V64.32a70.174,70.174,0,0,0-1.415-10.086,33.279,33.279,0,0,1-.706-4.528c0-1.491,2.078-3.149,5.049-3.149h4.509L116.4,34.74c6.352-4.721,10.248-12.412,10.055-19.766,6.833,5.3,11.663,14.5,12.546,24.284a39.809,39.809,0,0,1-1.2,10.995L137.306,52l.083.024a156.932,156.932,0,0,1-5.266,17.163l-1.17,3.073,2.846,1.63c5.08,2.915,8.211,5.043,8.211,11.82,0,7.767-6.918,13.726-13.605,14.99l-9.141,1.725L127,107.645a8.815,8.815,0,0,1,3.952,7.288,9.01,9.01,0,0,1-9.146,8.852h-2.921l-.816,2.7c-2.844,9.347-5.925,13.912-15.838,14.891a54.4,54.4,0,0,0,.776-9.44c0-.9-.076-3.447-.111-4.265l-.446-8.712-6.057,6.224c-2.053,2.111-5.708,3.79-9.7,4.587v-7.6L43.346,110.8l-15.425,4.051c-3.443-3.483-4.134-9.234-3.275-10.565ZM71.452,76.141a1.106,1.106,0,0,1,.984-.935l6.526.21c7.962-.279,16.067-3.592,16.978-11.968,0-5.673-3.983-11.193-9.6-11.193-3,0-6.387,2.1-10.189,4.642-2.475,1.658-4.429,2.97-5.911,2.97-1.01,0-1.815-.675-1.815-1.231a.834.834,0,0,1,.05-.281l4.167-5.644-3.6-2.443c-.767-.513-1.961-1.469-2.1-2.185-.059-.339.42-.942.571-1.121a66.718,66.718,0,0,0,4.943-6.555c1.057-1.505,1.673-2.338,3.462-2.338a3.2,3.2,0,0,1,3.2,3.185c0,1.162,1.263,2.075,2.827,2.075s2.265-1.119,3.23-2.075c0,0,3.721-3.449,1.751-5.079-2.246-1.858-11.248,1.935-8.742-6.422L78.8,28.56c.958-1.288,5.266-4.513,14.172-4.513a42.385,42.385,0,0,1,5.283.355l1.331.167L118.479,12.8a4.13,4.13,0,0,1,.22.685l.016.114c.986,5.78-2.615,12.66-8.379,16l-2.3,1.336,1.489,8.614c-4.849,1.5-8.23,5.432-8.23,10.16a34.144,34.144,0,0,0,.852,6A63.958,63.958,0,0,1,103.41,64.6c0,8.96-12.227,14.887-22.579,14.552l-.269-.005c-.43-.019-7.017-.546-8.631-1.837a1.3,1.3,0,0,1-.479-1.166ZM87.1,16.339a23.572,23.572,0,0,1,5.453-4.792,24.4,24.4,0,0,1,6.477-2.96A26.073,26.073,0,0,1,111.252,8.3l-13.4,8.349a47.853,47.853,0,0,0-4.88-.262,38.732,38.732,0,0,0-6.277.5c.132-.184.269-.37.4-.544Zm204.126-1.968h50.517c-4.738,6.746-11.48,9.931-20.793,9.931h-37.3a34.217,34.217,0,0,0,7.574-9.931ZM288.7,43.247H251.408a34.908,34.908,0,0,0,8.235-11.283h50.732C305.6,39.633,298.619,43.247,288.7,43.247ZM259.018,61.78H221.731a35.032,35.032,0,0,0,8.03-10.871h50.664c-4.762,7.378-11.671,10.871-21.407,10.871Zm8.575,28.762c11.807,1.968,21.482,7.34,28.745,15.971,1.56,1.849,3.054,3.812,4.528,5.939-19.87-2.638-26.784-5.563-37.9-22.612,1.489.2,3.011.424,4.627.7Zm79.286,82.676c.731,1.186,1.356,2.3,1.961,3.373.741,1.324,1.465,2.612,2.314,3.962-5.751-.368-10.106-3.586-14.139-9.674,3.721-1.314,8.214-.382,9.863,2.338Zm-47.242,26.238,7.751-2.96.108-.038c11.007-4.606,12.572-7.48,12.051-14.88v-29.9c8.372,21.491,16.283,36.6,32.506,36.6a32.059,32.059,0,0,0,7.1-.854l6.328-1.452-4.36-4.852a40.8,40.8,0,0,1-5.68-8.289c-.637-1.14-1.3-2.323-2.1-3.629-3.794-6.226-12.832-8.339-20.147-5.026-3.313-6.663-6.654-15.348-10.675-26.069l-.878-2.042c-.7-1.593-1.387-3.208-2.1-4.824v-.264h-.108a151.961,151.961,0,0,0-8.332-16.668,96.17,96.17,0,0,0-8.976-12.745c-8.466-10.052-19.668-16.3-33.3-18.578a192.644,192.644,0,0,0-24.545-2.321c-1.741-.081-3.577-.179-5.528-.282-3.823-.212-11.723-.868-19.363-1.507-5.151-.42-10.434-.859-14.592-1.172a15.93,15.93,0,0,0,.446-3.676,21.646,21.646,0,0,0-.446-4.58h54.217c13.979,0,24.095-6.25,30.118-18.547,13.892-.129,23.939-6.5,29.873-18.931h1.944c14.465,0,24.807-6.675,30.732-19.84l2.447-5.417H170.41c-12.067,0-22.341,7.963-26.187,20.277l-.117.427c-3.131-8.8-8.844-16.281-16.173-20.682C117.75.6,106.153-1.457,96.922,1.224a32.022,32.022,0,0,0-8.556,3.931,31.232,31.232,0,0,0-7.246,6.469A60.608,60.608,0,0,0,74.833,21.8a12.34,12.34,0,0,0-2.449,2.653l-2.194,4.175-.12.239A52.461,52.461,0,0,1,61.747,41.98a8.8,8.8,0,0,0-2.27,7.5A9.813,9.813,0,0,0,62.009,54.3l-.059.114a8.488,8.488,0,0,0-1.119,4.222c0,4.9,4.217,8.607,9.405,8.607,3.773,0,6.853-1.777,10.116-3.96,1.323-.89,4.83-3.242,5.984-3.371a2.9,2.9,0,0,1,2.777,2.8c0,4.017-5.125,6.181-8.794,6.448l-7.457.8c-5.375.513-7.926,3.39-7.926,5.966a6.584,6.584,0,0,0,2.088,4.9l.555.568L69.472,83.1,61.553,95.983c-5.637-5.281-12.244-8.478-18.091-8.664A12.7,12.7,0,0,0,34,90.644a11.548,11.548,0,0,0-1.836,2.271h-.132A16.513,16.513,0,0,0,18.292,100.1c-2.681,4.151-1.713,11.345,1.682,16.832L0,122.178V218.7H366.326V199.455Z" transform="translate(0 -0.071)" fill="#C21B17" fill-rule="evenodd"/>
                                </g>
                                <path id="Fill-4" d="M30.3,24.433,6.407,18.167v7.91L30.3,32.349Z" transform="translate(40.876 113.521)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-6" d="M2.1,32.357l23.882-6.272v-7.92L2.1,24.442Z" transform="translate(13.414 113.514)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-8" d="M2.1,34.506l23.882-6.264v-7.92L2.1,26.586Z" transform="translate(13.414 127.271)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-10" d="M30.3,26.586,6.407,20.322v7.92L30.3,34.506Z" transform="translate(40.876 127.27)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-12" d="M30.3,28.756,6.407,22.478V30.4L30.3,36.666Z" transform="translate(40.876 141.023)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-14" d="M2.1,36.667,25.984,30.4v-7.92L2.1,28.756Z" transform="translate(13.414 141.024)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-16" d="M94.108,15.667c-5.187,1.541-10.387,3.034-15.517,4.745A8.439,8.439,0,0,1,73,20.389c-5.21-1.694-10.467-3.254-15.711-4.848-1-.3-2.135-.794-2.284.971,2.136,1.534,4.109,2.942,6.069,4.365,4.511,3.28,9,6.6,13.56,9.8a2.348,2.348,0,0,0,2.159.086C83.447,26.08,90.038,21.3,96.628,16.55c-.385-1.827-1.579-1.162-2.52-.883" transform="translate(350.93 94.845)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-18" d="M95.625,84.091H87.708v-38.2H92.3c7.66.188,12.025,4.707,13.6,18.046h2.82l-.026-39.508c-.057.079-2.775,0-2.775,0,0,.2-.543,16.987-13.959,16.748h-4.25l.045-35.73c22.164,0,30.3-1.126,34.156,26.345h2.338V1.217L63.91,1.241v4.2H74.358v78.64H62.843v4.141h62.181V56.1h-3.114c-3.1,24.3-9.191,28-26.284,28" transform="translate(400.94 5.381)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-20" d="M87.986,89.941A20.816,20.816,0,0,0,105.872,80.5c.035-.112,10.833,8.616,10.873,8.65V47.57h9.174v-3.9H91.879v3.9h11.657V75.857c-1.97,7.176-12.438,10.176-15.55,10.176-21.746,0-20.193-32.158-20.193-40.77,0-7.872-.782-40.8,20.193-40.8,14.769,0,22.539,14.869,25.656,28.239H116c0-5.508.09-31.689.038-31.629.052-.208-10.132,7.393-10.168,7.269.227-.045-4.651-7.037-17.886-7.037-25.664,0-35.071,25.89-35,43.955.119,16.519,7.658,44.678,35,44.678" transform="translate(338.074 4.458)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-22" d="M129.707,43.9H115.741V7.463H133.6c10.481,1.6,10.913,13.848,10.913,17.743,0,9.423-3.9,18.693-14.8,18.693Zm60.629-22.588,13.218,37.6H177.923ZM180.255,86.1c-1.166,0-8.856.229-9.336-5.184-.325-3.917,5.063-17.989,5.063-17.989h28.576c-.015-.05,8.886,23.189,8.967,23.189h-9.971v4.175h77.853V58.161h-3.122c-3.1,24.3-9.2,27.941-26.28,27.941h-1.033V7.479h10.863V3.243H226.093V7.479h10.871V86.1h-8.635L196.558.893h-4.664C192,.848,165.5,78.2,165.443,78.431c.059-.227-1.993,6.641-6.362,7.5-4.015.193-3.712-1.925-3.712-2.672V68.35c0-3.908-.3-12.793-4.324-16.875-4.5-4.58-12.194-4.924-12.022-5.1,0,0,19.534-4.072,19.534-22.839,0-13.158-9.058-19.7-24.178-20.277H91.453V7.5h10.977V86.119H91.453v4.175h35.21V86.119H115.682v-37.8H130.33c25.4,2.118-4.365,42.025,28.928,41.975h21Z" transform="translate(583.479 3.313)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-24" d="M86.534,12.188V76.457c0,6.267-9.283,8.652-13.167,8.652h-.041v3.115h30.317V85.11c-3.881,0-13.226-2.385-13.226-8.652l.1-56.581c16.3,23.533,47.041,68.4,47.334,68.349h1.531V12.188c.43-6.558,7.8-6.794,10.9-6.794h10.1V84.086H148.867v4.139h62.181V56.1h-3.112c-3.1,24.3-9.182,28-26.284,28h-7.921V45.888h4.587c7.674.191,12.039,4.711,13.6,18.046h2.832l-.031-39.506c-.052.079-2.765,0-2.765,0,0,.2-.559,16.987-13.957,16.748h-4.261V5.394c22.157,0,30.343-1.076,34.205,26.4h2.34V1.217H122.293V5.394h2.3c3.1,0,10.469.236,10.887,6.794h-.007v50.16L94.329,1.217H71.921V5.394h3.725c4.418,0,10.607.2,10.888,6.794" transform="translate(458.858 5.379)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-26" d="M152.821,84.043H141.8V5.456h11.018V1.21H117.736V5.456h11.011l.037,78.587H117.736v4.227h35.085Z" transform="translate(751.164 5.335)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-28" d="M153.074,30.416a2.308,2.308,0,0,0,2.118.086c6.524-4.595,12.982-9.282,19.447-13.939-.376-1.789-1.55-1.135-2.472-.863-5.085,1.51-10.185,2.977-15.21,4.652a8.269,8.269,0,0,1-5.483-.024c-5.107-1.663-10.258-3.187-15.395-4.75-.982-.3-2.1-.78-2.244.952,2.1,1.5,4.03,2.881,5.948,4.277,4.428,3.213,8.819,6.467,13.292,9.609" transform="translate(853.871 95.115)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-30" d="M161.441,30.416a2.308,2.308,0,0,0,2.118.086c6.524-4.595,12.982-9.282,19.446-13.939-.376-1.789-1.55-1.135-2.472-.863-5.085,1.51-10.185,2.977-15.21,4.652a8.269,8.269,0,0,1-5.483-.024c-5.107-1.663-10.258-3.187-15.395-4.75-.982-.3-2.1-.78-2.244.952,2.1,1.5,4.03,2.881,5.948,4.277,4.421,3.213,8.819,6.467,13.292,9.609" transform="translate(907.253 95.115)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-32" d="M110.3,86.325a30.706,30.706,0,0,1-3.256,6.274,23.825,23.825,0,0,1-3.993,4.533,23.364,23.364,0,0,1-4.238,2.982,25,25,0,0,1-10.689,3.106h-.371a17.237,17.237,0,0,1-2.395-.31,13.577,13.577,0,0,1-4.054-1.554,20.223,20.223,0,0,1-4.731-3.788,24.736,24.736,0,0,1-4.483-7.018,50.265,50.265,0,0,1-3.32-11.3,90.659,90.659,0,0,1-1.289-16.52,89.727,89.727,0,0,1,1.352-16.954,50.2,50.2,0,0,1,3.5-11.489,25.478,25.478,0,0,1,4.672-7.145,21.389,21.389,0,0,1,4.79-3.785,12.253,12.253,0,0,1,3.993-1.492,20.583,20.583,0,0,1,2.213-.25h.123a25.221,25.221,0,0,1,8.046,1.179,21.8,21.8,0,0,1,6.083,3.108,20.127,20.127,0,0,1,4.361,4.411A32.875,32.875,0,0,1,109.63,35.4a38.353,38.353,0,0,1,3.317,13.788H115.4V18.01l-9.7,7.331a10.226,10.226,0,0,0-3.931-3.666,24.268,24.268,0,0,0-4.979-1.987,27.148,27.148,0,0,0-4.667-.871q-2.149-.186-3.257-.186h-.858q-.5,0-3.257.25a29.867,29.867,0,0,0-6.638,1.551,42.831,42.831,0,0,0-8.292,3.976,29.855,29.855,0,0,0-8.169,7.576,41.63,41.63,0,0,0-6.206,12.421,59.468,59.468,0,0,0-2.456,18.32A64.986,64.986,0,0,0,57.411,84.71a53.867,53.867,0,0,0,4.24,8.075,30.724,30.724,0,0,0,6.2,7.082,30.3,30.3,0,0,0,8.662,5.029,32.091,32.091,0,0,0,11.612,1.925,27.14,27.14,0,0,0,8.539-1.243,23.884,23.884,0,0,0,6.571-3.292,24.533,24.533,0,0,0,4.854-4.595,35.544,35.544,0,0,0,3.5-5.279A43.6,43.6,0,0,0,116.02,78h-3.565a39.624,39.624,0,0,1-2.15,8.32" transform="translate(338.075 112.52)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-34" d="M119.264,89.63a22.445,22.445,0,0,1-4.731,7.886,11.3,11.3,0,0,1-6.88,3.354H85.906V62.987h7A9.464,9.464,0,0,1,99.174,66.4a20.674,20.674,0,0,1,3.32,5.9,27.234,27.234,0,0,1,1.6,8.072h1.845V41.995h-1.845a32.957,32.957,0,0,1-1.843,7.827,20.6,20.6,0,0,1-3.5,5.773,9.941,9.941,0,0,1-6.328,3.292H85.906V22.37h20.028a11.318,11.318,0,0,1,6.88,3.354,22.568,22.568,0,0,1,4.729,7.889q2.148,5.4,2.152,15.338h1.717V18.145H61.946V22.37H72.635v78.5H61.946v4.222H123.87v-30.8h-2.457q0,9.941-2.149,15.341" transform="translate(395.218 113.378)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-36" d="M127.261,76.621a38.623,38.623,0,0,0-.432-4.408,21.168,21.168,0,0,0-2.393-6.894,25.223,25.223,0,0,0-6.021-7.2,27.794,27.794,0,0,0-11.18-5.342l-16.34-4.222a19.916,19.916,0,0,1-5.654-2.734,19.832,19.832,0,0,1-3.931-3.788,8.935,8.935,0,0,1-1.844-5.775,16.869,16.869,0,0,1,2.457-7.579,16.537,16.537,0,0,1,5.406-5.214Q91.017,21.1,97.65,21.1a24.531,24.531,0,0,1,10.321,2.855,23.192,23.192,0,0,1,3.808,2.731A18.278,18.278,0,0,1,115.1,30.6a19.422,19.422,0,0,1,2.334,5.525,29.108,29.108,0,0,1,.862,7.452h2.334V17.993l-7.249,5.468a13.706,13.706,0,0,0-4.793-3.168,43.353,43.353,0,0,0-5.161-1.677,26.9,26.9,0,0,0-5.773-.623,23.9,23.9,0,0,0-8.478,1.677,25.237,25.237,0,0,0-8.049,4.969A25.706,25.706,0,0,0,72.834,44.2q0,6.462,2.576,10.5a24.8,24.8,0,0,0,5.654,6.393,23.118,23.118,0,0,0,8.108,3.976l18.063,4.222a16.2,16.2,0,0,1,7.188,3.664,18.326,18.326,0,0,1,3.808,5.031,14.759,14.759,0,0,1,1.536,4.721c.162,1.41.245,2.359.245,2.855v.25a17.826,17.826,0,0,1-1.352,7.264,14.831,14.831,0,0,1-3.44,4.969,16.866,16.866,0,0,1-4.609,3.044,28.213,28.213,0,0,1-4.851,1.677,25.526,25.526,0,0,1-4.115.685q-1.785.122-2.52.122h-.368A27.112,27.112,0,0,1,90.34,102.4a23.242,23.242,0,0,1-6.267-3.044,20.1,20.1,0,0,1-4.483-4.287,30.139,30.139,0,0,1-3.072-4.9,34.979,34.979,0,0,1-3.193-13.414H70.989v28.817l8.478-6.212a23.691,23.691,0,0,0,6.388,4.284,32.091,32.091,0,0,0,6.266,2.173,36.616,36.616,0,0,0,6.635.873h.491q.981,0,3.379-.189a27.329,27.329,0,0,0,5.528-1.116,33.347,33.347,0,0,0,6.512-2.8,21.776,21.776,0,0,0,6.145-5.155,27.873,27.873,0,0,0,4.606-8.2,34.206,34.206,0,0,0,1.843-11.985Z" transform="translate(452.914 112.412)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-38" d="M154.4,41.124c0,.582-.022,1.472-.059,2.672a32.732,32.732,0,0,1-.428,4.039q-.376,2.236-.989,4.594a17.156,17.156,0,0,1-1.72,4.284,9.877,9.877,0,0,1-2.827,3.168,6.726,6.726,0,0,1-4.052,1.243h-17.2V22.494h17.2a8.465,8.465,0,0,1,5.033,2.238,14.728,14.728,0,0,1,3.505,5.339q1.528,3.6,1.535,10.434Zm4.236-19.747a20.71,20.71,0,0,0-7.675-2.734,48.2,48.2,0,0,0-5.528-.5H102.547v4.349h11.306v78.377H102.547v4.222h35.262v-4.222H127.123V65.222h17.321q.5,0,2.458-.188a29.279,29.279,0,0,0,4.613-.869A25.889,25.889,0,0,0,157.1,61.93a20.249,20.249,0,0,0,5.469-4.284,21.208,21.208,0,0,0,4.118-6.956A28.9,28.9,0,0,0,168.281,40.5q0-7.944-2.886-12.421a20.135,20.135,0,0,0-6.76-6.706Z" transform="translate(654.257 113.378)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-40" d="M166.814,78.213a51.9,51.9,0,0,1-3.321,11.367,25.5,25.5,0,0,1-4.421,7.078,19.256,19.256,0,0,1-4.672,3.788A13.676,13.676,0,0,1,150.408,102a15.778,15.778,0,0,1-2.458.31h-.738a17.181,17.181,0,0,1-2.391-.31,13.6,13.6,0,0,1-4.059-1.555,20.306,20.306,0,0,1-4.731-3.788,24.553,24.553,0,0,1-4.48-7.078,51.5,51.5,0,0,1-3.321-11.367,91.7,91.7,0,0,1-1.291-16.644,90.742,90.742,0,0,1,1.291-16.584,51.616,51.616,0,0,1,3.321-11.3,24.593,24.593,0,0,1,4.48-7.08,21.109,21.109,0,0,1,4.672-3.788,12.971,12.971,0,0,1,3.993-1.553,17.373,17.373,0,0,1,2.517-.31h.738a17.144,17.144,0,0,1,2.517.31,13,13,0,0,1,4,1.553,20.262,20.262,0,0,1,4.605,3.788,25.547,25.547,0,0,1,4.421,7.08,51.92,51.92,0,0,1,3.321,11.368,90.869,90.869,0,0,1,1.292,16.519,91.69,91.69,0,0,1-1.292,16.644m11.609,5.838a67.991,67.991,0,0,0,4.421-22.481,57.8,57.8,0,0,0-2.458-18.075,42,42,0,0,0-6.14-12.235,28.782,28.782,0,0,0-8.052-7.449,42.912,42.912,0,0,0-8.229-3.914,29.859,29.859,0,0,0-6.694-1.553c-1.889-.165-2.989-.248-3.321-.248h-.244c-.325,0-1.454.083-3.38.248a30.649,30.649,0,0,0-6.819,1.553,43.934,43.934,0,0,0-8.354,3.914,29.937,29.937,0,0,0-8.229,7.449,40.031,40.031,0,0,0-6.266,12.235,57.561,57.561,0,0,0-2.465,18.075,68.177,68.177,0,0,0,4.428,22.481,53.6,53.6,0,0,0,4.236,8.261,30.624,30.624,0,0,0,6.266,7.2,30.073,30.073,0,0,0,8.79,5.091,36.311,36.311,0,0,0,23.343,0,29.239,29.239,0,0,0,8.723-5.091,32.6,32.6,0,0,0,6.266-7.2,44.521,44.521,0,0,0,4.177-8.261" transform="translate(715.806 113.056)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-42" d="M127.232,22.369h11.424v78.5H127.232V105.1h35.262v-4.224H151.682v-78.5h10.812V18.144H127.232Z" transform="translate(811.75 113.377)" fill="#C21B17" fill-rule="evenodd"/>
                                <g id="Group-46" transform="translate(886.612 131.523)">
                                    <path id="Fill-44" d="M47.81.115H10.191V4.339H22.107V86.691a25.053,25.053,0,0,1-.982,6.336,11.877,11.877,0,0,1-2.395,4.409A5.91,5.91,0,0,1,14,99.36a5.167,5.167,0,0,1-1.6-.5,2.985,2.985,0,0,1-1.107-.807,1.929,1.929,0,0,1-.491-1.3V95.51a4.925,4.925,0,0,0,1.291-1.3,5.729,5.729,0,0,0,.8-1.677,8.742,8.742,0,0,0,.491-2.111,8.637,8.637,0,0,0-.859-4.162,6.522,6.522,0,0,0-1.966-2.3,7.532,7.532,0,0,0-2.824-1.117,6.756,6.756,0,0,0-4.3,1.181,8.417,8.417,0,0,0-2.211,2.545,9.152,9.152,0,0,0-.984,3.85q0,4.344,2.091,6.646a13.956,13.956,0,0,0,4.542,3.414,15.268,15.268,0,0,0,6.513,1.369,20.422,20.422,0,0,0,9.155-1.863A19.834,19.834,0,0,0,28.8,95.2,23,23,0,0,0,32.735,88.8a38.826,38.826,0,0,0,2.091-6.77,45.852,45.852,0,0,0,.859-5.964q.184-2.669.184-3.788V4.339H47.81Z" transform="translate(-0.238 -0.115)" fill="#C21B17" fill-rule="evenodd"/>
                                </g>
                                <path id="Fill-47" d="M186.233,65.319a25.271,25.271,0,0,0-6.022-7.2,27.773,27.773,0,0,0-11.181-5.342l-16.34-4.22a18.664,18.664,0,0,1-9.587-6.524,8.953,8.953,0,0,1-1.838-5.775,16.911,16.911,0,0,1,2.45-7.576,16.566,16.566,0,0,1,5.41-5.217q3.686-2.358,10.317-2.359a24.532,24.532,0,0,1,10.325,2.855,23.192,23.192,0,0,1,3.808,2.734A18.2,18.2,0,0,1,176.9,30.6a19.575,19.575,0,0,1,2.332,5.528,29.315,29.315,0,0,1,.856,7.452h2.339V17.993l-7.255,5.468a13.649,13.649,0,0,0-4.79-3.168,43.731,43.731,0,0,0-5.159-1.677,26.909,26.909,0,0,0-5.779-.623,23.915,23.915,0,0,0-8.472,1.677,25.156,25.156,0,0,0-8.052,4.968A25.729,25.729,0,0,0,134.631,44.2q0,6.462,2.576,10.5a24.775,24.775,0,0,0,5.653,6.393,23.133,23.133,0,0,0,8.111,3.976l18.059,4.222a16.223,16.223,0,0,1,7.188,3.664,18.3,18.3,0,0,1,3.808,5.033,14.543,14.543,0,0,1,1.535,4.719c.162,1.41.251,2.359.251,2.855v.25a17.942,17.942,0,0,1-1.351,7.266,14.912,14.912,0,0,1-3.447,4.969,16.68,16.68,0,0,1-4.605,3.041,28.1,28.1,0,0,1-4.856,1.677,25.414,25.414,0,0,1-4.111.685c-1.188.083-2.03.122-2.524.122h-.369a27.121,27.121,0,0,1-8.413-1.179,23.391,23.391,0,0,1-6.266-3.041,20.347,20.347,0,0,1-4.487-4.286,30.621,30.621,0,0,1-3.07-4.907,35.058,35.058,0,0,1-3.2-13.414h-2.332v28.817l8.48-6.21a23.645,23.645,0,0,0,6.384,4.282,32.059,32.059,0,0,0,6.273,2.176,36.293,36.293,0,0,0,6.627.871h.495c.657,0,1.779-.065,3.38-.186a27.441,27.441,0,0,0,5.528-1.119,33.133,33.133,0,0,0,6.509-2.8,21.748,21.748,0,0,0,6.148-5.155,27.65,27.65,0,0,0,4.605-8.2,34.125,34.125,0,0,0,1.845-11.985v-.623a40.14,40.14,0,0,0-.428-4.406,21.2,21.2,0,0,0-2.4-6.9" transform="translate(847.185 112.411)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-49" d="M140.479,48.7h1.838q0-10.063,2.214-15.528a23.042,23.042,0,0,1,4.8-7.948,11.262,11.262,0,0,1,6.878-3.354H167.63v79H156.818V105.1h35.388V100.87H181.512v-79h9.461a10.689,10.689,0,0,1,6.635,3.354,23.192,23.192,0,0,1,4.546,7.948q2.092,5.472,2.089,15.528H206.7V18.145H140.479Z" transform="translate(896.267 113.378)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-51" d="M204.568,78.213a51.52,51.52,0,0,1-3.314,11.367,25.508,25.508,0,0,1-4.421,7.078,19.117,19.117,0,0,1-4.672,3.788A13.676,13.676,0,0,1,188.169,102a15.778,15.778,0,0,1-2.458.31h-.738a17.18,17.18,0,0,1-2.391-.31,13.6,13.6,0,0,1-4.059-1.555,20.307,20.307,0,0,1-4.731-3.788,24.555,24.555,0,0,1-4.48-7.078,51.893,51.893,0,0,1-3.321-11.367A91.678,91.678,0,0,1,164.7,61.569a90.724,90.724,0,0,1,1.292-16.584,52.016,52.016,0,0,1,3.321-11.3,24.6,24.6,0,0,1,4.48-7.08,21.109,21.109,0,0,1,4.672-3.788,12.972,12.972,0,0,1,3.993-1.553,17.374,17.374,0,0,1,2.517-.31h.738a17.258,17.258,0,0,1,2.517.31,13,13,0,0,1,4,1.553,19.954,19.954,0,0,1,4.605,3.788,25.551,25.551,0,0,1,4.421,7.08,51.54,51.54,0,0,1,3.314,11.368,90.138,90.138,0,0,1,1.3,16.519,90.953,90.953,0,0,1-1.3,16.644m7.439-46.954a28.782,28.782,0,0,0-8.052-7.449,42.91,42.91,0,0,0-8.229-3.914,29.819,29.819,0,0,0-6.7-1.553c-1.882-.165-2.989-.248-3.314-.248h-.244c-.325,0-1.454.083-3.38.248a30.649,30.649,0,0,0-6.819,1.553,43.931,43.931,0,0,0-8.354,3.914,29.83,29.83,0,0,0-8.229,7.449,40.029,40.029,0,0,0-6.266,12.235,57.559,57.559,0,0,0-2.465,18.075,67.991,67.991,0,0,0,4.428,22.481,53.608,53.608,0,0,0,4.236,8.261,30.49,30.49,0,0,0,6.273,7.2,29.936,29.936,0,0,0,8.782,5.091,36.311,36.311,0,0,0,23.343,0,29.24,29.24,0,0,0,8.723-5.091,32.607,32.607,0,0,0,6.266-7.2,44.529,44.529,0,0,0,4.177-8.261A68,68,0,0,0,220.6,61.569a57.8,57.8,0,0,0-2.458-18.075,42,42,0,0,0-6.14-12.235" transform="translate(956.724 113.056)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-53" d="M299.069,22.365c.775-.081,1.365-.124,1.779-.124h.494v-4.1H278.117v4.1h.62c.487,0,1.2.043,2.148.124a13.638,13.638,0,0,1,2.952.622,9.386,9.386,0,0,1,2.827,1.492,4.5,4.5,0,0,1,1.653,2.731V79.765L246.995,18.153l-20.723-.01v.01H208.382v3.728h10.8L201.748,83.243,182.331,21.881h11.424V18.153h-35.38v3.728h10.812l25.8,83.222h3.07l24.081-83.222h4.133s13.019.078,13.019,8.57V96.036a6.351,6.351,0,0,1-3.742,4.1,13.423,13.423,0,0,1-4.244.868,2.438,2.438,0,0,1-.546-.062,3.053,3.053,0,0,0-.561-.062h-.362V105.1H252.56v-4.225h-.487a2.916,2.916,0,0,0-.553.062,3.127,3.127,0,0,1-.679.062,14.367,14.367,0,0,1-2.089-.186,9.683,9.683,0,0,1-2.391-.682,6.058,6.058,0,0,1-2.089-1.489,5.6,5.6,0,0,1-1.292-2.61V36.413L287.7,105.1h4.052V27.21a6.632,6.632,0,0,1,2.03-2.731,9.8,9.8,0,0,1,2.7-1.492,11.582,11.582,0,0,1,2.583-.622" transform="translate(1010.445 113.37)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-55" d="M198.019,74.911l11.919-36.271,13.277,36.271Zm49.638,25.959L217.192,18.145h-4.915L186.1,96.028a7.375,7.375,0,0,1-1.9,2.607,8.915,8.915,0,0,1-4.731,2.111,16.361,16.361,0,0,1-1.72.124h-.62v4.222h23.838V100.87h-1.107a17.52,17.52,0,0,1-2.207-.184,9.273,9.273,0,0,1-2.583-.749,5.053,5.053,0,0,1-2.089-1.8,5.53,5.53,0,0,1-.864-3.227,9.741,9.741,0,0,1,.495-3.106l4.79-12.669h27.52l8.354,21.737h-9.454v4.222h32.184V100.87Z" transform="translate(1130.122 113.378)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-57" d="M102.909,22.246H113.6v-4.1H78.338v4.1h11.3v78.625h-11.3v4.222H113.6v-4.222H102.909Z" transform="translate(499.804 113.378)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-59" d="M94.755,30.6c4.733-2.154,9.53-4.17,14.292-6.265,4.635-2.035,9.274-4.067,13.863-6.2.644-.3,1.015-1.193,1.513-1.81a6.972,6.972,0,0,0-2.166-.919c-2.2-.121-4.436.115-6.633-.074a12.688,12.688,0,0,0-10.493,3.395c-4.007,3.757-8.41,7.077-12.761,10.687.408,1.5,1.043,1.8,2.386,1.19" transform="translate(589.319 94.94)" fill="#C21B17" fill-rule="evenodd"/>
                                <path id="Fill-61" d="M143,74.911l11.919-36.271,13.27,36.271Zm19.168-56.767h-4.915l-26.17,77.883s-1.008,3.406-5.812,4.5l-33.8-45.554,32.167-32.6h9.308V18.145H108.985v4.224h10.43L81.9,60.377l30.47,40.493h-11.3v4.222h44.878V100.87h-1.107a17.633,17.633,0,0,1-2.211-.184,9.317,9.317,0,0,1-2.581-.749,5.071,5.071,0,0,1-2.089-1.8,5.546,5.546,0,0,1-.859-3.227,9.864,9.864,0,0,1,.491-3.106l4.79-12.669H169.9l8.355,21.737H168.8v4.222h32.19V100.87h-8.356Z" transform="translate(522.533 113.378)" fill="#C21B17" fill-rule="evenodd"/>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <div class="welcome-page__form">
            <form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="login-form" autocomplete="off">
                <div class="login-form__group">
                    <input type="text" name="log" class="login-form__input" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="45" id="user_login" autocomplete="username" placeholder="&nbsp;"/>
                    <label for="user_login" class="login-form__label"><?php _e('Přihlašovací jméno'); ?>: </label>
                </div>
                <div class="login-form__group">
                    <input type="password" name="pwd" class="login-form__input" value="" size="45" id="user_pass" autocomplete="current-password" placeholder="&nbsp;"/>
                    <label for="user_pass" class="login-form__label"><?php _e('Heslo'); ?>: </label>
                </div>

                <?php if( isset( $_GET['login'] )  && ( $_GET['login'] == 'failed'  || $_GET['login'] == 'empty' ) ) : ?>
                    <div class="login-form__group">

                        <?php if( $_GET['login'] == 'failed' ) : ?>

                            <span class="login-form__error">Zadané uživatelské jmeno nebo heslo není správné.</span>

                        <?php elseif( $_GET['login'] == 'empty' ) : ?>

                            <span class="login-form__error">Vyplňte prosím uživatelské jméno i heslo.</span>

                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <div class="login-form__group">
                    <?php do_action('login_form'); ?>
                    <button type="submit" name="user-submit" class="login-form__submit btn btn--arrow"><span>Přihlásit se</span></button>
                    <input type="hidden" name="redirect_to" value="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>" />
                    <input type="hidden" name="user-cookie" value="1" />
                </div>   
            </form>
        </div>

        <div class="welcome-page__text-box">
            <h1 class="heading-primary">Vítejte na zaměstnanecké zóně</h1>
            <h1 class="heading-primary heading-primary--sub">Portál pro nové zaměstnance skupiny Generali</h1>
        </div>
    </main>

<?php endif; ?>

<?php
get_footer();
