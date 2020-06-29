var request = new XMLHttpRequest()

request.open('GET', 'https://fr.dofus.dofapi.fr/resources', true)

request.onload = function() {

    var options = '';
    var data = JSON.parse(this.response);

    for(var i = 0; i < data.length; i++)
      options += '<option value="'+data[i]["name"]+'" />';

    document.getElementById('anrede').innerHTML = options;

    

    console.log(data);
  }




  request.send()

