<?php
require __DIR__ . '/../app/config.php';

require DIR_VIEWS . '/main/header.inc.php';
?>
    <header>
        <div class="header">
            <div class="header-logo">
                <a href="index.php"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="40px" viewBox="0 0 493 133" enable-background="new 0 0 493 133" xml:space="preserve">
            <g id="Layer_2">
                <g>
                    <path fill="white" d="M136.217,91.855h2.657v16.102h10.625v2.063h-13.282V91.855z"/>
                    <path fill="white" d="M177.124,105.29h-11.316l-2.375,4.729h-2.963l9.477-18.164h3.116l9.479,18.164h-3.04L177.124,105.29z
                         M176.102,103.227l-4.597-9.158l-4.624,9.158H176.102z"/>
                    <path fill="white" d="M195.297,91.855h8.71c1.26,0,2.333,0.092,3.218,0.274c0.886,0.187,1.604,0.468,2.159,0.845
                        c0.553,0.377,0.958,0.854,1.213,1.435c0.256,0.579,0.384,1.254,0.384,2.024c0,1.155-0.313,2.059-0.943,2.705
                        c-0.633,0.646-1.542,1.086-2.733,1.319v0.076c0.732,0.084,1.375,0.26,1.929,0.526c0.555,0.271,1.009,0.604,1.366,1.006
                        c0.357,0.402,0.626,0.854,0.805,1.349c0.18,0.494,0.271,1.013,0.271,1.546c0,0.688-0.133,1.334-0.396,1.938
                        c-0.265,0.604-0.678,1.141-1.237,1.609c-0.563,0.469-1.29,0.838-2.187,1.105c-0.894,0.27-1.962,0.402-3.206,0.402H195.3
                        L195.297,91.855L195.297,91.855z M197.953,99.503h6.794c1.125,0,2.001-0.218,2.631-0.653c0.631-0.437,0.946-1.141,0.946-2.113
                        c0-0.42-0.064-0.801-0.191-1.146c-0.128-0.343-0.358-0.642-0.69-0.894s-0.789-0.444-1.365-0.578
                        c-0.579-0.135-1.32-0.202-2.223-0.202h-5.899L197.953,99.503L197.953,99.503z M197.953,107.957h6.359
                        c0.903,0,1.647-0.08,2.235-0.24c0.587-0.158,1.051-0.381,1.392-0.666c0.343-0.285,0.58-0.621,0.718-1.006
                        c0.135-0.386,0.202-0.797,0.202-1.232c0-1.057-0.374-1.861-1.124-2.416c-0.749-0.553-1.939-0.83-3.574-0.83h-6.207
                        L197.953,107.957L197.953,107.957z"/>
                    <path fill="white" d="M225.553,100.938c0-0.721,0.076-1.459,0.229-2.215c0.152-0.754,0.398-1.484,0.739-2.188
                        c0.341-0.705,0.779-1.371,1.316-2c0.536-0.629,1.188-1.18,1.954-1.646c0.766-0.471,1.653-0.84,2.669-1.107
                        c1.014-0.268,2.167-0.402,3.461-0.402s2.447,0.135,3.461,0.402c1.013,0.269,1.903,0.638,2.667,1.107
                        c0.768,0.469,1.419,1.02,1.955,1.646c0.536,0.629,0.975,1.295,1.314,2c0.341,0.703,0.589,1.436,0.74,2.188
                        c0.152,0.756,0.229,1.494,0.229,2.215c0,1.09-0.18,2.197-0.536,3.32c-0.356,1.124-0.942,2.151-1.75,3.083
                        c-0.812,0.931-1.873,1.688-3.193,2.276c-1.318,0.587-2.949,0.88-4.891,0.88c-1.942,0-3.573-0.293-4.893-0.88
                        c-1.319-0.588-2.384-1.348-3.191-2.276c-0.811-0.932-1.395-1.958-1.75-3.083C225.732,103.135,225.553,102.027,225.553,100.938z
                         M228.363,100.938c0,1.123,0.184,2.146,0.551,3.068c0.365,0.924,0.882,1.711,1.546,2.365c0.665,0.654,1.459,1.162,2.388,1.521
                        c0.928,0.361,1.954,0.543,3.078,0.543c1.123,0,2.149-0.182,3.078-0.543c0.928-0.359,1.724-0.867,2.388-1.521
                        c0.663-0.652,1.18-1.441,1.544-2.365c0.367-0.922,0.551-1.945,0.551-3.068s-0.184-2.146-0.551-3.068
                        c-0.365-0.924-0.881-1.71-1.544-2.365c-0.664-0.652-1.46-1.162-2.388-1.521c-0.928-0.36-1.955-0.541-3.078-0.541
                        c-1.124,0-2.15,0.181-3.078,0.541c-0.929,0.359-1.724,0.869-2.388,1.521s-1.181,1.441-1.546,2.365
                        C228.545,98.791,228.363,99.814,228.363,100.938z"/>
                    <path fill="white" d="M263.318,110.02h-2.655V91.855h9.067c1.432,0,2.598,0.113,3.499,0.34c0.903,0.226,1.609,0.55,2.12,0.968
                        c0.51,0.42,0.864,0.928,1.059,1.522c0.196,0.596,0.296,1.254,0.296,1.975c0,1.105-0.381,2.042-1.139,2.804
                        c-0.757,0.765-1.783,1.238-3.077,1.423v0.049c0.614,0.084,1.123,0.211,1.532,0.379c0.409,0.166,0.75,0.418,1.022,0.754
                        c0.271,0.336,0.488,0.765,0.65,1.283c0.162,0.52,0.304,1.166,0.424,1.938c0.151,0.974,0.302,1.854,0.445,2.651
                        c0.146,0.8,0.344,1.49,0.601,2.076h-2.809c-0.12-0.316-0.23-0.707-0.334-1.17c-0.102-0.461-0.199-0.957-0.293-1.484
                        c-0.093-0.526-0.19-1.066-0.295-1.62c-0.102-0.556-0.212-1.083-0.33-1.587c-0.086-0.316-0.21-0.614-0.371-0.893
                        c-0.161-0.277-0.419-0.516-0.767-0.718c-0.351-0.2-0.804-0.356-1.367-0.465c-0.561-0.108-1.276-0.164-2.145-0.164h-5.137v8.103
                        H263.318z M263.318,99.855h6.057c0.695,0,1.327-0.047,1.888-0.141c0.563-0.092,1.04-0.251,1.433-0.479
                        c0.394-0.227,0.689-0.527,0.896-0.905c0.205-0.376,0.307-0.858,0.307-1.444c0-1.107-0.341-1.877-1.021-2.314
                        c-0.684-0.436-1.831-0.654-3.449-0.654h-6.105v5.938H263.318L263.318,99.855z"/>
                    <path fill="white" d="M305.963,105.29h-11.315l-2.375,4.729h-2.963l9.477-18.164h3.116l9.478,18.164h-3.04L305.963,105.29z
                         M304.941,103.227l-4.598-9.158l-4.624,9.158H304.941z"/>
                    <path fill="white" d="M327.915,94.068h-7.814v-2.213h18.289v2.213h-7.814v15.951h-2.656V94.068H327.915z"/>
                    <path fill="white" d="M350.153,100.938c0-0.721,0.075-1.459,0.229-2.215c0.153-0.754,0.399-1.484,0.739-2.188
                        c0.342-0.705,0.778-1.371,1.315-2c0.536-0.629,1.188-1.18,1.953-1.646c0.767-0.471,1.658-0.84,2.67-1.107
                        c1.016-0.268,2.166-0.402,3.461-0.402s2.447,0.135,3.463,0.402c1.012,0.269,1.902,0.638,2.668,1.107
                        c0.768,0.469,1.419,1.02,1.953,1.646c0.537,0.629,0.975,1.295,1.317,2c0.34,0.703,0.587,1.436,0.737,2.188
                        c0.153,0.756,0.231,1.494,0.231,2.215c0,1.09-0.179,2.197-0.537,3.32c-0.355,1.124-0.941,2.151-1.751,3.083
                        c-0.808,0.931-1.872,1.688-3.191,2.276c-1.32,0.587-2.947,0.88-4.893,0.88c-1.941,0-3.57-0.293-4.892-0.88
                        c-1.319-0.588-2.385-1.348-3.192-2.276c-0.81-0.932-1.393-1.958-1.749-3.083C350.327,103.135,350.153,102.027,350.153,100.938z
                         M352.961,100.938c0,1.123,0.183,2.146,0.551,3.068c0.363,0.924,0.879,1.711,1.544,2.365s1.461,1.162,2.389,1.521
                        c0.928,0.361,1.955,0.543,3.077,0.543c1.123,0,2.148-0.182,3.078-0.543c0.928-0.359,1.724-0.867,2.388-1.521
                        c0.665-0.652,1.182-1.441,1.546-2.365c0.366-0.922,0.553-1.945,0.553-3.068s-0.187-2.146-0.553-3.068
                        c-0.364-0.924-0.881-1.71-1.546-2.365c-0.664-0.652-1.46-1.162-2.388-1.521c-0.93-0.36-1.955-0.541-3.078-0.541
                        c-1.122,0-2.149,0.181-3.077,0.541c-0.928,0.359-1.724,0.869-2.389,1.521s-1.181,1.441-1.544,2.365
                        C353.144,98.791,352.961,99.814,352.961,100.938z"/>
                    <path fill="white" d="M387.915,110.02h-2.656V91.855h9.067c1.431,0,2.598,0.113,3.499,0.34c0.902,0.226,1.61,0.55,2.119,0.968
                        c0.512,0.42,0.864,0.928,1.063,1.522c0.196,0.596,0.295,1.254,0.295,1.975c0,1.105-0.379,2.042-1.142,2.804
                        c-0.758,0.765-1.779,1.238-3.074,1.423v0.049c0.611,0.084,1.125,0.211,1.53,0.379c0.411,0.166,0.748,0.418,1.021,0.754
                        c0.271,0.336,0.49,0.765,0.651,1.283c0.161,0.521,0.304,1.166,0.422,1.938c0.15,0.974,0.302,1.854,0.446,2.651
                        c0.146,0.8,0.346,1.49,0.602,2.076h-2.812c-0.119-0.316-0.229-0.707-0.333-1.17c-0.102-0.461-0.198-0.957-0.293-1.484
                        c-0.094-0.526-0.188-1.066-0.295-1.62c-0.101-0.556-0.213-1.083-0.331-1.587c-0.082-0.316-0.208-0.614-0.37-0.893
                        c-0.161-0.277-0.417-0.516-0.766-0.718c-0.349-0.2-0.807-0.356-1.368-0.465c-0.563-0.108-1.273-0.164-2.145-0.164h-5.136v8.103
                        H387.915z M387.915,99.855h6.055c0.695,0,1.33-0.047,1.891-0.141c0.563-0.092,1.04-0.251,1.431-0.479
                        c0.392-0.227,0.689-0.527,0.896-0.905c0.204-0.376,0.308-0.858,0.308-1.444c0-1.107-0.341-1.877-1.021-2.314
                        c-0.686-0.436-1.832-0.654-3.448-0.654h-6.104v5.938H387.915L387.915,99.855z"/>
                    <path fill="white" d="M416.052,91.855h2.654v18.164h-2.654V91.855z"/>
                    <path fill="white" d="M433.918,91.855h13.794v2.063h-11.139v5.736H447v2.063h-10.427v6.24h11.445v2.063h-14.103L433.918,91.855
                        L433.918,91.855z"/>
                    <path fill="white" d="M475.744,96.686c-0.063-0.638-0.271-1.166-0.609-1.586c-0.342-0.418-0.775-0.75-1.307-0.992
                        c-0.526-0.244-1.133-0.416-1.813-0.518c-0.678-0.1-1.396-0.15-2.146-0.15c-0.661,0-1.29,0.076-1.877,0.228
                        c-0.588,0.149-1.103,0.373-1.546,0.667c-0.442,0.293-0.792,0.643-1.048,1.043c-0.255,0.402-0.383,0.854-0.383,1.357
                        c0,0.252,0.042,0.496,0.128,0.73c0.085,0.234,0.238,0.46,0.459,0.68c0.224,0.217,0.521,0.408,0.896,0.565
                        c0.37,0.16,0.843,0.29,1.402,0.39l6.872,1.158c1.499,0.252,2.603,0.771,3.31,1.559c0.704,0.791,1.059,1.744,1.059,2.869
                        c0,0.906-0.199,1.721-0.602,2.44c-0.396,0.72-0.978,1.328-1.732,1.824c-0.759,0.495-1.679,0.876-2.759,1.146
                        c-1.082,0.268-2.308,0.401-3.667,0.401c-2.642,0-4.693-0.481-6.157-1.447c-1.463-0.964-2.282-2.452-2.451-4.465h2.812
                        c0.017,0.603,0.177,1.144,0.474,1.623c0.298,0.478,0.703,0.88,1.227,1.207c0.521,0.328,1.142,0.58,1.862,0.756
                        c0.728,0.177,1.521,0.265,2.391,0.265c1.926,0,3.396-0.328,4.418-0.981c1.021-0.654,1.533-1.483,1.533-2.491
                        c0-0.619-0.204-1.109-0.613-1.472c-0.407-0.36-0.941-0.642-1.596-0.845c-0.658-0.201-1.41-0.352-2.264-0.451
                        c-0.85-0.102-1.715-0.207-2.591-0.313c-0.877-0.108-1.74-0.251-2.593-0.428c-0.854-0.179-1.605-0.444-2.263-0.808
                        c-0.653-0.358-1.187-0.838-1.597-1.433c-0.408-0.596-0.611-1.372-0.611-2.327c0-0.871,0.186-1.652,0.547-2.34
                        c0.367-0.688,0.896-1.266,1.586-1.736c0.688-0.469,1.532-0.826,2.527-1.067c0.994-0.244,2.127-0.365,3.384-0.365
                        c0.956,0,1.904,0.08,2.852,0.24c0.943,0.159,1.799,0.438,2.564,0.842c0.769,0.401,1.397,0.946,1.893,1.636
                        c0.489,0.688,0.772,1.553,0.844,2.592h-2.815V96.686z"/>
                </g>
                <g>
                    <path fill="white" d="M122.143,42.168h14.156l7.658,41.885h-13.111l-1.103-8.412h-16.768l-4.641,8.412H96.733L122.143,42.168z
                         M128.699,67.926l-1.684-17.578h-0.174l-9.514,17.578H128.699z"/>
                    <path fill="white" d="M163.705,42.168h19.261c0.813,0,1.672,0.01,2.582,0.029c0.908,0.02,1.827,0.098,2.755,0.232
                        c0.928,0.137,1.828,0.348,2.698,0.638s1.689,0.707,2.465,1.247c1.546,1.084,2.658,2.563,3.336,4.439
                        c0.676,1.876,0.725,4.186,0.144,6.932c-0.387,1.856-0.977,3.452-1.77,4.786c-0.792,1.335-1.634,2.456-2.523,3.365
                        c-0.89,0.909-1.738,1.625-2.553,2.146c-0.812,0.522-1.45,0.9-1.914,1.131c-0.928,0.464-1.915,0.813-2.958,1.043
                        c-1.045,0.232-2.06,0.408-3.046,0.523c-0.986,0.113-1.915,0.184-2.784,0.201c-0.87,0.021-1.596,0.03-2.176,0.03l-7.542,0.06
                        l-3.189,15.082h-11.661L163.705,42.168z M171.421,60.964h5.163c0.695,0,1.487-0.028,2.379-0.087
                        c0.889-0.058,1.74-0.262,2.552-0.609c0.813-0.348,1.547-0.909,2.205-1.683c0.657-0.772,1.14-1.856,1.451-3.249
                        c0.27-1.277,0.251-2.272-0.06-2.988c-0.31-0.715-0.781-1.256-1.422-1.624c-0.638-0.367-1.392-0.589-2.262-0.667
                        c-0.87-0.077-1.729-0.116-2.582-0.116h-5.104L171.421,60.964z"/>
                    <path fill="white" d="M211.358,42.284h31.443l-1.683,8.006h-19.957l-1.855,8.702h18.796l-1.74,8.005h-18.796l-1.854,8.935
                        h20.421l-1.74,8.121h-31.908L211.358,42.284z"/>
                    <path fill="white" d="M256.82,42.168h19.375c1.896,0,3.514,0.039,4.848,0.116c1.334,0.078,2.465,0.223,3.395,0.435
                        c0.927,0.213,1.711,0.522,2.35,0.928c0.639,0.406,1.188,0.919,1.651,1.538c0.271,0.31,0.522,0.696,0.755,1.16
                        c0.231,0.464,0.426,1.025,0.581,1.683c0.153,0.658,0.231,1.431,0.231,2.32c0,0.851-0.116,1.837-0.35,2.958
                        c-0.231,1.161-0.551,2.157-0.959,2.988c-0.404,0.832-0.85,1.557-1.334,2.175c-0.482,0.619-0.994,1.131-1.535,1.537
                        c-0.541,0.407-1.104,0.765-1.684,1.074c-1.509,0.852-2.873,1.402-4.09,1.653c-1.219,0.252-2.137,0.416-2.756,0.493l-0.061,0.232
                        c2.014,0.078,3.551,0.348,4.612,0.812c1.063,0.465,1.817,1.131,2.263,2.001c0.443,0.872,0.668,1.924,0.668,3.163
                        c0,1.239-0.059,2.668-0.176,4.293c-0.077,0.695-0.145,1.488-0.202,2.377c-0.059,0.892-0.104,1.799-0.146,2.729
                        c-0.039,0.928-0.049,1.848-0.029,2.755c0.021,0.91,0.068,1.729,0.146,2.466h-12.588c-0.077-1.275-0.039-2.707,0.113-4.294
                        c0.155-1.585,0.328-3.306,0.523-5.161c0.115-1.277,0.192-2.351,0.229-3.221c0.039-0.87-0.064-1.576-0.316-2.118
                        c-0.252-0.54-0.715-0.938-1.395-1.188c-0.676-0.25-1.673-0.377-2.984-0.377h-4.873l-3.482,16.359h-11.66L256.82,42.168z
                         M264.71,60.152h4.351c1.275,0,2.271-0.009,2.988-0.028c0.715-0.02,1.343-0.126,1.885-0.319c0.696-0.193,1.275-0.494,1.74-0.899
                        c0.465-0.406,0.861-0.841,1.188-1.305c0.329-0.465,0.58-0.918,0.757-1.364c0.173-0.445,0.3-0.841,0.376-1.189
                        c0.271-1.277,0.23-2.272-0.115-2.988c-0.352-0.715-0.879-1.228-1.596-1.537c-0.718-0.309-1.528-0.494-2.438-0.551
                        c-0.909-0.059-1.789-0.087-2.64-0.087h-4.354L264.71,60.152z"/>
                    <path fill="white" d="M312.535,50.464h-12.764l1.739-8.296h37.536l-1.739,8.296h-13.056l-7.136,33.589H305.4L312.535,50.464z"/>
                    <path fill="white" d="M361.524,42.168l-5.28,24.889c-0.229,1.123-0.396,2.233-0.49,3.334c-0.099,1.104,0.064,2.1,0.49,2.988
                        c0.541,1.16,1.396,2.021,2.555,2.582c1.158,0.561,2.455,0.842,3.887,0.842c1.854,0,3.403-0.328,4.642-0.986
                        c1.237-0.656,2.252-1.5,3.046-2.523c0.791-1.023,1.401-2.126,1.826-3.307c0.427-1.182,0.755-2.293,0.986-3.335l5.165-24.482
                        h11.312l-5.104,24.25c-0.231,1.16-0.521,2.331-0.871,3.511c-0.347,1.182-0.764,2.332-1.245,3.451
                        c-0.485,1.122-1.045,2.176-1.685,3.162c-0.638,0.984-1.362,1.866-2.177,2.641c-1.274,1.237-2.688,2.254-4.232,3.045
                        c-1.546,0.793-3.133,1.402-4.758,1.828c-1.624,0.424-3.221,0.715-4.786,0.869c-1.565,0.153-3.008,0.23-4.321,0.23
                        c-3.288,0-5.994-0.311-8.123-0.928c-2.127-0.619-3.819-1.451-5.074-2.494c-1.259-1.045-2.146-2.233-2.669-3.567
                        c-0.521-1.334-0.813-2.716-0.87-4.146c-0.059-1.433,0.028-2.834,0.263-4.207c0.23-1.373,0.464-2.641,0.693-3.799l5.106-23.844
                        L361.524,42.168L361.524,42.168z"/>
                    <path fill="white" d="M403.723,42.168H423.1c1.895,0,3.509,0.039,4.844,0.116c1.335,0.078,2.467,0.223,3.396,0.435
                        c0.928,0.213,1.71,0.522,2.349,0.928c0.638,0.406,1.188,0.919,1.652,1.538c0.271,0.31,0.521,0.696,0.755,1.16
                        c0.23,0.464,0.426,1.025,0.58,1.683c0.152,0.658,0.23,1.431,0.23,2.32c0,0.851-0.113,1.837-0.348,2.958
                        c-0.232,1.161-0.552,2.157-0.958,2.988c-0.405,0.832-0.853,1.557-1.334,2.175c-0.482,0.619-0.995,1.131-1.538,1.537
                        c-0.541,0.407-1.101,0.765-1.682,1.074c-1.511,0.852-2.872,1.402-4.092,1.653c-1.218,0.252-2.138,0.416-2.754,0.493l-0.061,0.232
                        c2.011,0.078,3.548,0.348,4.613,0.812c1.063,0.465,1.814,1.131,2.262,2.001c0.443,0.872,0.667,1.924,0.667,3.163
                        c0,1.239-0.058,2.668-0.174,4.293c-0.077,0.695-0.146,1.488-0.203,2.377c-0.06,0.892-0.106,1.799-0.146,2.729
                        c-0.038,0.928-0.049,1.848-0.027,2.755c0.019,0.91,0.065,1.729,0.145,2.466h-12.588c-0.078-1.275-0.037-2.707,0.115-4.294
                        c0.151-1.585,0.328-3.306,0.521-5.161c0.115-1.277,0.193-2.351,0.231-3.221s-0.067-1.576-0.318-2.118
                        c-0.252-0.54-0.718-0.938-1.393-1.188c-0.679-0.25-1.674-0.377-2.989-0.377h-4.872l-3.479,16.359h-11.662L403.723,42.168z
                         M411.614,60.152h4.352c1.275,0,2.271-0.009,2.985-0.028c0.719-0.02,1.346-0.126,1.889-0.319c0.694-0.193,1.273-0.494,1.737-0.899
                        c0.468-0.406,0.862-0.841,1.19-1.305c0.328-0.465,0.579-0.918,0.754-1.364c0.174-0.445,0.299-0.841,0.377-1.189
                        c0.271-1.277,0.232-2.272-0.115-2.988c-0.35-0.715-0.881-1.228-1.596-1.537c-0.717-0.309-1.529-0.494-2.438-0.551
                        c-0.908-0.059-1.79-0.087-2.642-0.087h-4.351L411.614,60.152z"/>
                    <path fill="white" d="M452.84,42.284h31.442L482.6,50.29h-19.958l-1.855,8.702h18.797l-1.738,8.005h-18.797l-1.856,8.935h20.42
                        l-1.739,8.121h-31.905L452.84,42.284z"/>
                </g>
                <g>
                    <path fill="white" d="M90.627,11.397c12.935,5.487,22.435,14.412,28.975,26.296c-6.348,9.152-12.354,18.648-18.87,27.634
                        C97.454,47.261,93.936,29.435,90.627,11.397z"/>
                    <path fill="white" d="M7.723,67.885c0-1.177,0-2.353,0-3.532c0.344-5.621,1.103-10.828,2.557-15.338
                        c11.146-2.083,22.142-4.318,33.234-6.452c-10.361,15.569-20.617,31.246-31.043,46.75C9.828,83.229,8.151,76.182,7.723,67.885z"/>
                    <path fill="white" d="M34.262,65.937c3.456,18.295,6.806,36.695,10.105,55.148c-12.935-5.53-22.526-14.401-29.221-26.174
                        C21.384,85.118,27.877,75.581,34.262,65.937z"/>
                    <path fill="white" d="M122.159,88.824c0.078,0,0.16,0,0.241,0c-5.637,13.273-14.77,23.05-26.903,29.826
                        c-8.314-5.428-16.73-11.129-24.957-16.799c-1.12-0.773-2.129-1.519-3.288-2.438C85.668,95.999,103.883,92.379,122.159,88.824z"/>
                    <path fill="white" d="M65.55,6.528c1.176,0,2.353,0,3.53,0c5.809,0.399,11.336,1.082,15.823,2.8
                        c2.135,10.772,4.066,21.744,6.209,32.505c-15.2-10.404-30.619-20.591-45.649-31.166C51.301,8.432,57.85,6.903,65.55,6.528z"/>
                    <path fill="white" d="M65.55,125.711c-5.716-0.372-11.084-1.091-15.583-2.68c-1.889-11.014-3.939-21.868-5.965-32.746
                        c15.286,10.318,30.731,20.479,45.771,31.043c-5.991,2.367-12.722,3.999-20.693,4.383C67.903,125.711,66.726,125.711,65.55,125.711
                        z"/>
                    <path fill="white" d="M24.195,24.871c0.836-0.828,1.677-1.653,2.514-2.481c4.241-3.707,8.476-6.83,12.708-8.964
                        c9.314,6.465,18.633,12.714,27.95,19.104c-18.356,3.574-36.718,7.298-55.072,10.78C14.76,37.153,18.595,31.007,24.195,24.871z"/>
                </g>
            </g></svg></a>
            </div>
        </div>
    </header>

<div class="container register">
<div class="main-container">
<p class="textContainer" >Formulaire d'inscription à l'experience d'Escape Game d'Aperture Science</p>

<?php
if ($advert = getAdvert()) {
    echo '<p class="'.$advert['type'].'">'.$advert['message'].'</p>';
}
?>

    <form class="form" action="do/register.php" method="post">
        <div class="form-group">
            <input class="form-input" type="text" name="lastName" id="lastName" placeholder="Nom" value="<?=$_SESSION['form']['lastName'] ?? ''?>">
        </div>

        <div class="form-group">
            <input class="form-input"  type="text" name="firstName" placeholder="Prénom" id="firstName">
        </div>

        <div class="form-group">
            <input class="form-input" type="date" name="birthdate" placeholder="JJ/MM/AAAA" id="birthdate">
        </div>

        <div class="form-group">
            <input class="form-input" type="email" name="email" placeholder="Adresse email" id="email">
        </div>

        <div class="form-group">
            <label  class="sexe-input sexe" for="sexe">Sexe</label>
            <input class="sexe-input" type="radio" name="sexe" id="homme"> <label class="sexe" for="homme">Homme</label>
            <input class="sexe-input" type="radio" name="sexe" id="femme"> <label class="sexe" for="femme">Femme</label>
        </div>

        <div class="form-group">
            <input class="form-input" type="tel" name="phone" placeholder="Numéro de tel" id="tel">
        </div>

        <div class="form-group">
            <input class="form-input" type="text" name="emergency" placeholder="Personne à contacter en cas de décès" id="emergency">
        </div>

        <div class="form-group">
            <input class="form-input valid" type="submit" value="S'inscrire">
        </div>
    </form>
</div>
<?php
$_SESSION['form'] = [];

require DIR_VIEWS . '/main/footer.inc.php';
?>