<?php

$this->title = 'My Yii Application';
use yii\helpers\Url;
?>

<style>
    .node {
        cursor: pointer;
    }
    .node circle {
        fill: #fff;
        stroke: steelblue;
        stroke-width: 1.5px;
    }
    .node text {
        font: 10px sans-serif;
    }
    .link {
        fill: none;
        stroke: #ccc;
        stroke-width: 1.5px;
    }

    body {
        overflow: hidden;
    }
    .styled-select {
        background: transparent;
        width: 268px;
        padding: 5px;
        font-size: 16px;
        border: 1px solid #ccc;
        height: 34px;
    }

</style>
<script src="assets/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="assets/d3.v3.min.js" charset="utf-8"></script>
<script src="assets/web3.js" charset="utf-8"></script>
<script>
    $(function() {
        $('#body').css('display', 'none');
        $('#lv_ed').css('display', 'none');
        $('#text').css('display', 'none');
        $('#form').css('display', 'none');
        function btn() {
            var option = $(this).find('option:selected');
            if (option.text() == 'IT') {
                $('#lv_ed').css('display', 'block');
            }
            else if (option.text() == 'Бакалавриат'){
                $('#body').css('display', 'block');
                $('#text').css('display', 'block');
                $('#form').css('display', 'block');

            }
            else {
                $('#body').css('display', 'none');
                $('#lv_ed').css('display', 'none');
                $('#text').css('display', 'none');
                $('#form').css('display', 'block');

            }
        }
        $('select').on('change', btn);



    });
</script>
<div class="site-index">
    <h1>Начнем составлять Вашу учебную программу без границ и ограничений!</h1>
    <h3>В каком направлении вы хотите развиваться?</h3>
    <select id = "sel_prof" class="styled-select">
        <option></option>
        <option>IT</option>
        <option>Web</option>
        <option>Management</option>
    </select>
    <div id = "lv_ed">
        <h3>Выберите какой уровень образования вы хотите получить?</h3>
        <select id = "sel_prof" class="styled-select" style="margin-bottom: 10px;">
            <option></option>
            <option>Бакалавриат</option>
            <option>Магистратура</option>
            <option>Аспирантура</option>
        </select>
    </div>
    <div id = "text">
        <p class="lead">Отлично. Мы поможем тебе собрать такую программу , которую хочешь именно ты.
        Стать специалистом в том что тебе нравится не смотря на границы государства....</p>

    </div>
    <div>
    <div id="data" style="float: left"></div>
    <div id="body" style="float: right">
    <script >
        var num = 0;
        var array = {};
        var margin = {
                top: 20,
                right: 120,
                bottom: 20,
                left: 120
            },
            width = 960 - margin.right - margin.left,
            height = 800 - margin.top - margin.bottom;

        var root = {
            "name": "IT-специалист",
            "children": [{
                "name": "Web",
                "children": [{
                    "name": "cluster",
                    "children": [{
                        "name": "AgglomerativeCluster",
                        "size": 3938
                    }, {
                        "name": "CommunityStructure",
                        "size": 3812
                    }, {
                        "name": "HierarchicalCluster",
                        "size": 6714
                    }, {
                        "name": "MergeEdge",
                        "size": 743
                    }]
                }, {
                    "name": "graph",
                    "children": [{
                        "name": "BetweennessCentrality",
                        "size": 3534
                    }, {
                        "name": "LinkDistance",
                        "size": 5731
                    }, {
                        "name": "MaxFlowMinCut",
                        "size": 7840
                    }, {
                        "name": "ShortestPaths",
                        "size": 5914
                    }, {
                        "name": "SpanningTree",
                        "size": 3416
                    }]
                }, {
                    "name": "optimization",
                    "children": [{
                        "name": "AspectRatioBanker",
                        "size": 7074
                    }]
                }]
            }, {
                "name": "DataBase",
                "children": [{
                    "name": "Easing",
                    "size": 17010
                },{
                    "name": "Transitioner",
                    "size": 19975
                }, {
                    "name": "TransitionEvent",
                    "size": 1116
                }, {
                    "name": "Tween",
                    "size": 6006
                }]
            }, {
                "name": "ReverseIngenering",
                "children": [{
                    "name": "converters",
                    "children": [{
                        "name": "Converters",
                        "size": 721
                    }, {
                        "name": "DelimitedTextConverter",
                        "size": 4294
                    }, {
                        "name": "GraphMLConverter",
                        "size": 9800
                    }, {
                        "name": "IDataConverter",
                        "size": 1314
                    }, {
                        "name": "JSONConverter",
                        "size": 2220
                    }]
                }, {
                    "name": "DataField",
                    "size": 1759
                }, {
                    "name": "DataSchema",
                    "size": 2165
                }, {
                    "name": "DataSet",
                    "size": 586
                }, {
                    "name": "DataSource",
                    "size": 3331
                }, {
                    "name": "DataTable",
                    "size": 772
                }, {
                    "name": "DataUtil",
                    "size": 3322
                }]
            }, {
                "name": "SistemAdministrator",
                "children": [{
                    "name": "DirtySprite",
                    "size": 8833
                }, {
                    "name": "LineSprite",
                    "size": 1732
                }, {
                    "name": "RectSprite",
                    "size": 3623
                }, {
                    "name": "TextSprite",
                    "size": 10066
                }]
            }]
        };

        var i = 0,
            duration = 850,
            rectW = 90,
            rectH = 30;

        var tree = d3.layout.tree().nodeSize([110, 40]);
        var diagonal = d3.svg.diagonal()
            .projection(function (d) {
                return [d.x + rectW / 2, d.y + rectH / 2];
            });

        var svg = d3.select("#body").append("svg").attr("width", 800).attr("height", 1700)
            .call(zm = d3.behavior.zoom().scaleExtent([1,3]).on("zoom", redraw)).append("g")
            .attr("transform", "translate(" + 350 + "," + 20 + ")");

        //necessary so that zoom knows where to zoom and unzoom from
        zm.translate([350, 20]);

        root.x0 = 0;
        root.y0 = height / 2;

        function collapse(d) {
            if (d.children) {
                d._children = d.children;
                d._children.forEach(collapse);
                d.children = null;
            }
        }

        root.children.forEach(collapse);
        update(root);

        d3.select("#body").style("height", "1800px");

        function update(source) {

            // Compute the new tree layout.
            var nodes = tree.nodes(root).reverse(),
                links = tree.links(nodes);

            // Normalize for fixed-depth.
            nodes.forEach(function (d) {
                d.y = d.depth * 180;
            });

            // Update the nodes…
            var node = svg.selectAll("g.node")
                .data(nodes, function (d) {
                    return d.id || (d.id = ++i);
                });

            // Enter any new nodes at the parent's previous position.
            var nodeEnter = node.enter().append("g")
                .attr("class", "node")
                .attr("transform", function (d) {
                    return "translate(" + source.x0 + "," + source.y0 + ")";
                })
                .on("click", click);

            nodeEnter.append("rect")
                .attr("width", rectW)
                .attr("height", rectH)
                .attr("stroke", "black")
                .attr("stroke-width", 1)
                .style("fill", function (d) {
                    return d._children ? "lightsteelblue" : "#fff";
                });

            nodeEnter.append("text")
                .attr("x", rectW / 2)
                .attr("y", rectH / 2)
                .attr("dy", ".35em")
                .attr("text-anchor", "middle")
                .text(function (d) {
                    return d.name;
                });

            // Transition nodes to their new position.
            var nodeUpdate = node.transition()
                .duration(duration)
                .attr("transform", function (d) {
                    return "translate(" + d.x + "," + d.y + ")";
                });

            nodeUpdate.select("rect")
                .attr("width", rectW)
                .attr("height", rectH)
                .attr("stroke", "black")
                .attr("stroke-width", 1)
                .style("fill", function (d) {
                   // return d._children ?  : "#fff";
                   // return d.color ? d.color : "lightsteelblue";
                    if (d.color){
                        return d.color;
                    }
                    else {
                        if (d._children){
                            return "lightsteelblue";
                        }
                        else {
                            return  "#fff";
                        }
                    }
                });

            nodeUpdate.select("text")
                .style("fill-opacity", 1);

            // Transition exiting nodes to the parent's new position.
            var nodeExit = node.exit().transition()
                .duration(duration)
                .attr("transform", function (d) {
                    return "translate(" + source.x + "," + source.y + ")";
                })
                .remove();

            nodeExit.select("rect")
                .attr("width", rectW)
                .attr("height", rectH)
                //.attr("width", bbox.getBBox().width)""
                //.attr("height", bbox.getBBox().height)
                .attr("stroke", "black")
                .attr("stroke-width", 1);

            nodeExit.select("text");

            // Update the links…
            var link = svg.selectAll("path.link")
                .data(links, function (d) {
                    return d.target.id;
                });

            // Enter any new links at the parent's previous position.
            link.enter().insert("path", "g")
                .attr("class", "link")
                .attr("x", rectW / 2)
                .attr("y", rectH / 2)
                .attr("d", function (d) {
                    var o = {
                        x: source.x0,
                        y: source.y0
                    };
                    return diagonal({
                        source: o,
                        target: o
                    });
                });

            // Transition links to their new position.
            link.transition()
                .duration(duration)
                .attr("d", diagonal);

            // Transition exiting nodes to the parent's new position.
            link.exit().transition()
                .duration(duration)
                .attr("d", function (d) {
                    var o = {
                        x: source.x,
                        y: source.y
                    };
                    return diagonal({
                        source: o,
                        target: o
                    });
                })
                .remove();

            // Stash the old positions for transition.
            nodes.forEach(function (d) {
                d.x0 = d.x;
                d.y0 = d.y;
            });
        }

        // Toggle children on click.
        function click(d) {

            if (d.children) {
                d._children = d.children;
                d.children = null;
                d.color = "#3AE2CE";
            } else {
                d.children = d._children;
                d._children = null;
                d.color = "#3AE2CE";
            }
            update(d);

            array[num]={};
            array[num]['name'] = d.name;
            array[num]['depth'] = d.depth;
            num++;
            $.ajax({
                type: "POST",
                url:"<?=Url::toRoute(['site/input2'])?>",
                data: {
                    array: array
                },
                responseType: 'html',
                success: function (data) {
                    $('div#input2').html(data);
                }
            });
            console.log(array);//уровень вложения
            $.ajax({
                type: "GET",
                url:"<?=Url::toRoute(['site/data'])?>",
                data: {
                    name: d.name
                },
                responseType: 'html',
                success: function (data) {
                    $('div#data').html(data);
                }
            });
        }

        //Redraw for zoom
        function redraw() {
            //console.log("here", d3.event.translate, d3.event.scale);
            svg.attr("transform",
                "translate(" + d3.event.translate + ")"
                + " scale(" + d3.event.scale + ")");
        }
        //# sourceURL=pen.js
    </script>
       </div>
    </div>
</div>

<form action="<?=Url::toRoute(['site/obrabot'])?>"  method="post" id="forma">
    <?php
    if (!Yii::$app->user->isGuest){
        printf("<div id='input1'>
    <input type='hidden' name='wallet' value='%s'>
    <input type='hidden' name='country' value='%s'>
    <input type='hidden' name='name' value='%s'>
    <input type='hidden' name='family' value='%s'>
    <input type='hidden' name='course_name' value='Programmist'>
    <input type='hidden' name='university_name' value='Garvard'>
    <input type='hidden' name='duration_day' value='44'>
    <input type='hidden' name='addr_course' value='0x4cEfFE8fbF74f01a9a39fbeeDE6366a5dF53BE50'>
    <input type='hidden' name='price' value='100'>
    <input type='hidden' name='_csrf' value='%s' >
</div>",Yii::$app->user->identity->wallet,Yii::$app->user->identity->country,Yii::$app->user->identity->name,Yii::$app->user->identity->family,Yii::$app->request->getCsrfToken());
}
    ?>
<div id="input2">
    
</div>
    <div id = "form">
        <input id="sub_form" class="btn btn-lg btn-success" type="submit" value="Заключить контракт" for="forma" >
    </div>
</form>