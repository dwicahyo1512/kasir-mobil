<?php

function check_already_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    // jika dia login diarahkan ke halaman dashboard
    if ($user_session) {
        redirect('dashboard');
    }
}
function check_not_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    // jika dia login diarahkan ke halaman login tanda(!) itu sama aja dengat tidak atau not
    if (!$user_session) {
        redirect('auth/login');
    }
}

function check_admin(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->level !=1 ){
        redirect('dashboard');
    }
}

function indo_currency($value)
{
    return 'Rp. ' . number_format($value, 0, ",", ".");
}
function indo_persen($value)
{
    return number_format($value, 0, ",", ".") . '%';
}

function indo_date($date){
    $d = substr($date,8,2);
    $m = substr($date,5,2);
    $y = substr($date,0,4);
    return $d.'/'.$m.'/'.$y;

}