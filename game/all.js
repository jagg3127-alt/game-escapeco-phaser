$('body').terminal(function(command,term){
    var cmd = $.terminal.parse_command(command);
     if(cmd.name === 'version'){
        term.echo('this is the first version')
}
},{
    greetings: ''
})