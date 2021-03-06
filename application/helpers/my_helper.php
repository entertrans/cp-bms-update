<?php

function input($var)
{
    $ci = get_instance();
    $input = htmlentities(strip_tags(trim($ci->input->post($var, true))));
    return $input;
}

function tag_input($type = '', $name = '', $id, $value = '', $string = null)
{
    $input = "<input type='" . $type . "' class='form-control' name='" . $name . "' id='" . $id . "' value='" . $value . "' $string>";
    return $input;
}

function tgl_indo($tgl)
{
    $exp = explode('-', $tgl);
    $arr_bln = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Novermber', 'Desember');

    $d = $exp[2];
    $m = $arr_bln[(int) $exp[1]];
    $y = $exp[0];

    $tgl = $d . ' ' . substr($m, 0, 3) . ' ' . $y;
    return $tgl;
}

function text_slug($str = '')
{
    $text = trim($str);

    if (empty($text)) return '';

    $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
    $text = strtolower(trim($text));
    $text = str_replace(' ', '-', $text);
    $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);

    return $text;
}

function slug_text($slug = '')
{
    $slug = trim($slug);
    if (empty($slug)) return '';
    $slug = str_replace('-', ' ', $slug);
    $slug = ucwords($slug);
    return $slug;
}
