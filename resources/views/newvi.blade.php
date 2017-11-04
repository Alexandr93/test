@extends('layouts.app')
<?php

//$sotr иерархический массив
//print_r($sotr);


//$so=json_encode($s);
//echo $s;

?>
@section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.3/themes/default/style.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.3/jstree.min.js"></script>
@endsection







@section('content')


    <example></example>





@endsection
@section('myscr')

<script>


    /* $(function() {
         $('#container').jstree({
             'core' : {
                 "check_callback" : true,
              'data': b



             },
             "plugins" : [ "contextmenu" ,"dnd", "wholerow" ]
         });
     });
 */

    $(document).ready(function () {
        $('#tree').jstree({
            'core': {
                "check_callback": true,
                'data': {
                    'url': "/tsconfig.json",
                    "data": function (node) {
                        return {'id': node.id};
                    }
                    // "check_callback" : true
                }
            },
            "massload": {
                "url": "/tsconfig.json",
                "data": function (nodes) {
                    return {"ids": nodes.join("0")};
                }
            },

            "plugins": ["contextmenu", "dnd", "massload"]
        });

        /*
                    'core': {
                        'data': {
                            'url': function (node) {
                                return '/tsconfig.json';
                            },

                            'data': function (node) {
                                return {
                                    parentId: node.id === "#" ? 0 : node.id,
                                    searchdepth: 1
                                }
                            },
                            'success': function (data) {
                                return data.list
                            }
                        },
                        'check_callback': true,
                    },
                    "plugins": ["json_data", "contextmenu" ,"dnd"]
                })*/
    });


</script>

@endsection
