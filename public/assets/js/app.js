/**
 * Created by alexroch on 28/10/15.
 */
$( document ).ready( function () {
    var tr = $( ".trClick" );

    tr.on( 'click' , function () {
        var id = $( this ).find( "td[data-Id]" ).data( 'id' ),//pegando o id da talbela de lista de clientes
            url = location.href, //pegando a url
            result = null;

        if(url.indexOf( '?' ) > 0){
            query = url.split( '?' );

            result = location.replace( "?"+query[ 1 ] + "&cliente="+id );
        }else{
            result = location.href= location.href+"?cliente="+id;
        }
        return result;
    });

    tr.hover( function () {
        $( this ).css({
            "cursor" : "pointer",
        });
    } );
} );