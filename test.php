<?php
/**
 * Created by PhpStorm.
 * User: summer.zuo
 * Date: 2018/9/28
 * Time: 10:36
 */
$str = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vYXBpLmx1bWVuLmxvY2FsL2F1dGhvcml6YXRpb25zIiwiaWF0IjoxNTM4MTAxNzU1LCJleHAiOjE1MzgxMDIzNTUsIm5iZiI6MTUzODEwMTc1NSwianRpIjoiRDV3cTNSMEsydmM4RFpLMyIsInN1YiI6MiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9,4297f44b13955235245b2497399d7a93";
echo hash('sha256',$str);