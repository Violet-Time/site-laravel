$(document).on('click', ".container .add-group", function() {
    var container = $(this).closest(".container");
    container.append(
        $("#group-template").html()
            .replace(/\{\{g\}\}/g, container.children(".group").last().data("i") + 1 || 1)
    );
}).on('click', ".group .add-field", function() {
    var group = $(this).closest(".group");
    group.append(
        $("#field-template").html()
            .replace(/\{\{g\}\}/g, group.data("i"))
            .replace(/\{\{f\}\}/g, group.children(".field").last().data("i") + 1 || 1)
    );
}).on('click', ".group .field .remove-field", function() {
    $(this).closest(".field").remove();
});

" <p class=field data-i={{f}}>\n" +
"    <label for=f-{{g}}-{{f}}>Поле {{f}}</label>\n" +
"    <input type=text id=f-{{g}}-{{f}} />\n" +
"    <button class=remove-field>Remove field</button>\n" +
"  </p>"