<?php
require('json-rpc.php');
session_start();

term.history().disable();

const user = await term.read('user: ');
if (user !== 'something') {
    term.error('user is invalid');
}
const pass = await term.read('password: ');

handle_json_rpc(new Commands());

?>