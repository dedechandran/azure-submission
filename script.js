function processImage(){

}



$("#btn-upload").click(function(){
    var url = $('#input-image').val();
    if(url != ""){
        $("#status").text("Status : Uploading !");
        $.post("./upload_blob.php",{imgUrl : url}, function(data,status){
            $('#input-image').val("");
        }).done(function(data){
            $("#status").text(`Status : ${data} !`);
        })
    }else{
        alert("Field Perlu diisi");
    }

})

$("#btn-load").click(function(){
    $(".blob-data").remove();
    $.get("./read_blob.php",function(data,status){
        console.log(data);
        let blobs= data.split("\n");
        for(let i=0;i< blobs.length-1;i++){
            let tableRow = $("<tr></tr>").addClass("blob-data");
            let dataNo = $(`<td> ${i+1} </td>`);
            let dataBlobURL = $(`<td> ${blobs[i]} </td>`);
            let img = $("<img>").attr("src",blobs[i]).css({"width":"100%","height" : "auto"});
            let dataImage = $("<td></td>").append(img);
            tableRow.append(dataNo);
            tableRow.append(dataBlobURL);
            tableRow.append(dataImage);
            $("table").append(tableRow);        
        }
    })
})

$("#btn-analyze").click(function(){
    $(".responsive-img").remove();
    let subscriptionKey = "44f61fa934d6442895753d2a182a2229";
    let uriBase =
    "https://southeastasia.api.cognitive.microsoft.com/vision/v2.0/analyze";

    let params = {
        "visualFeatures": "Categories,Description,Color",
        "details": "",
        "language": "en",
    };

    let imgUrl = $("#input-image-analyze").val();
    let blobImage = $("<img>").addClass("responsive-img col s10").attr("src",imgUrl);
    $("#img-container").append(blobImage);  

    $.ajax({
        url: uriBase + "?" + $.param(params),

        // Request headers.
        beforeSend: function(xhrObj){
            xhrObj.setRequestHeader("Content-Type","application/json");
            xhrObj.setRequestHeader(
                "Ocp-Apim-Subscription-Key", subscriptionKey);
        },

        type: "POST",

        // Request body.
        data: '{"url": ' + '"' + imgUrl + '"}',
    }).done(function(data){

        $(".description").remove();
        $('#img-container').append($(`<p>Tags : ${data.description.tags}</p>`).addClass("description"))
        $('#img-container').append($(`<p>Captions : ${data.description.captions[0].text}</p>`).addClass("description")) 
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        // Display error message.
        let errorString = (errorThrown === "") ? "Error. " :
            errorThrown + " (" + jqXHR.status + "): ";
        errorString += (jqXHR.responseText === "") ? "" :
            jQuery.parseJSON(jqXHR.responseText).message;
        alert(errorString);
    });

})
