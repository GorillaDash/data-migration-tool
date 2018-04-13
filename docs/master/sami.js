
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:GorillaDash" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="GorillaDash.html">GorillaDash</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:GorillaDash_DataMigrationTool" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="GorillaDash/DataMigrationTool.html">DataMigrationTool</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:GorillaDash_DataMigrationTool_Models" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="GorillaDash/DataMigrationTool/Models.html">Models</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:GorillaDash_DataMigrationTool_Models_Media" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="GorillaDash/DataMigrationTool/Models/Media.html">Media</a>                    </div>                </li>                            <li data-name="class:GorillaDash_DataMigrationTool_Models_Model" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="GorillaDash/DataMigrationTool/Models/Model.html">Model</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:GorillaDash_DataMigrationTool_Utils" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="GorillaDash/DataMigrationTool/Utils.html">Utils</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:GorillaDash_DataMigrationTool_Utils_Str" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="GorillaDash/DataMigrationTool/Utils/Str.html">Str</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:GorillaDash_DataMigrationTool_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="GorillaDash/DataMigrationTool/Client.html">Client</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "GorillaDash.html", "name": "GorillaDash", "doc": "Namespace GorillaDash"},{"type": "Namespace", "link": "GorillaDash/DataMigrationTool.html", "name": "GorillaDash\\DataMigrationTool", "doc": "Namespace GorillaDash\\DataMigrationTool"},{"type": "Namespace", "link": "GorillaDash/DataMigrationTool/Models.html", "name": "GorillaDash\\DataMigrationTool\\Models", "doc": "Namespace GorillaDash\\DataMigrationTool\\Models"},{"type": "Namespace", "link": "GorillaDash/DataMigrationTool/Utils.html", "name": "GorillaDash\\DataMigrationTool\\Utils", "doc": "Namespace GorillaDash\\DataMigrationTool\\Utils"},
            
            {"type": "Class", "fromName": "GorillaDash\\DataMigrationTool", "fromLink": "GorillaDash/DataMigrationTool.html", "link": "GorillaDash/DataMigrationTool/Client.html", "name": "GorillaDash\\DataMigrationTool\\Client", "doc": "&quot;Class Client&quot;"},
                                                        {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Client", "fromLink": "GorillaDash/DataMigrationTool/Client.html", "link": "GorillaDash/DataMigrationTool/Client.html#method___construct", "name": "GorillaDash\\DataMigrationTool\\Client::__construct", "doc": "&quot;Client construct&quot;"},
                    {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Client", "fromLink": "GorillaDash/DataMigrationTool/Client.html", "link": "GorillaDash/DataMigrationTool/Client.html#method_request", "name": "GorillaDash\\DataMigrationTool\\Client::request", "doc": "&quot;Request graphQL&quot;"},
            
            {"type": "Class", "fromName": "GorillaDash\\DataMigrationTool\\Models", "fromLink": "GorillaDash/DataMigrationTool/Models.html", "link": "GorillaDash/DataMigrationTool/Models/Media.html", "name": "GorillaDash\\DataMigrationTool\\Models\\Media", "doc": "&quot;Class Media&quot;"},
                                                        {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Models\\Media", "fromLink": "GorillaDash/DataMigrationTool/Models/Media.html", "link": "GorillaDash/DataMigrationTool/Models/Media.html#method_toArray", "name": "GorillaDash\\DataMigrationTool\\Models\\Media::toArray", "doc": "&quot;Get the instance as an array.&quot;"},
            
            {"type": "Class", "fromName": "GorillaDash\\DataMigrationTool\\Models", "fromLink": "GorillaDash/DataMigrationTool/Models.html", "link": "GorillaDash/DataMigrationTool/Models/Model.html", "name": "GorillaDash\\DataMigrationTool\\Models\\Model", "doc": "&quot;Class Model&quot;"},
                                                        {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Models\\Model", "fromLink": "GorillaDash/DataMigrationTool/Models/Model.html", "link": "GorillaDash/DataMigrationTool/Models/Model.html#method___construct", "name": "GorillaDash\\DataMigrationTool\\Models\\Model::__construct", "doc": "&quot;Media constructor&quot;"},
                    {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Models\\Model", "fromLink": "GorillaDash/DataMigrationTool/Models/Model.html", "link": "GorillaDash/DataMigrationTool/Models/Model.html#method_fill", "name": "GorillaDash\\DataMigrationTool\\Models\\Model::fill", "doc": "&quot;Fill all attributes to model&quot;"},
                    {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Models\\Model", "fromLink": "GorillaDash/DataMigrationTool/Models/Model.html", "link": "GorillaDash/DataMigrationTool/Models/Model.html#method_toQuery", "name": "GorillaDash\\DataMigrationTool\\Models\\Model::toQuery", "doc": "&quot;Make a query string&quot;"},
                    {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Models\\Model", "fromLink": "GorillaDash/DataMigrationTool/Models/Model.html", "link": "GorillaDash/DataMigrationTool/Models/Model.html#method_toArray", "name": "GorillaDash\\DataMigrationTool\\Models\\Model::toArray", "doc": "&quot;Get the instance as an array.&quot;"},
            
            {"type": "Class", "fromName": "GorillaDash\\DataMigrationTool\\Utils", "fromLink": "GorillaDash/DataMigrationTool/Utils.html", "link": "GorillaDash/DataMigrationTool/Utils/Str.html", "name": "GorillaDash\\DataMigrationTool\\Utils\\Str", "doc": "&quot;Class Str&quot;"},
                                                        {"type": "Method", "fromName": "GorillaDash\\DataMigrationTool\\Utils\\Str", "fromLink": "GorillaDash/DataMigrationTool/Utils/Str.html", "link": "GorillaDash/DataMigrationTool/Utils/Str.html#method_toCamelCase", "name": "GorillaDash\\DataMigrationTool\\Utils\\Str::toCamelCase", "doc": "&quot;Word to camel case&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


