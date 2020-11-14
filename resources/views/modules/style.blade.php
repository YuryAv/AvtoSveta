<style>
{{ file_get_contents(asset('css/head-style.css'), false, stream_context_create(["ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false)])) }}
</style>