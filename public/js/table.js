const $table = $('#table');
const $remove = $('#remove');
const baseActions = '<div class="d-flex justify-content-center"><a href="javascript:void(0)" title="editer"><i class="edit bi bi-pen me-4"></i></a><a href="javascript:void(0)" title="supprimer"><i class="remove bi bi-trash text-danger"></i></a></div>';
let selections;
let lastValueRow = {};
let newValueEdit = {};
window.operateEvents = {
    'click .remove': function (e, value, row, index) {
        console.log(index)
        if(confirm(`Êtes-vous sûre de vouloir supprimer l'élément avec comme ID ${row.id} ?`)){
            postData(`?delete=${row.id}&ok`, {
                bootstraptable: index
            }).then(data=>{
                if(data.error !== undefined) return; // TODO MESSAGE
                $table.bootstrapTable('refresh');
            });
        }
    },  
    'click .validEdit': function (e, value, row, index) {
        if(!checkCanValidateEdit()) return; // TODO MESSAGE
        postData(`?update=${row.id}`, {
            name: newValueEdit.nom,
            type: newValueEdit.type,
            adresse: newValueEdit.adresse,
            codePostal: newValueEdit.codepostal,
            country: newValueEdit.ville,
            url: newValueEdit.url,
            latitude: newValueEdit.latitude,
            longitude: newValueEdit.longitude,
            bootstraptable: index
        }).then(data=>{
            console.log(data)
            if(data.error !== undefined){
                resetRowWithLastValue();
                return;
            } // TODO MESSAGE
            $table.bootstrapTable('refresh');
            lastValueRow = {};
        });
    },
    'click .cancelEdit': function (e, value, row, index) {
        resetRowWithLastValue();
    },
    'click .edit': function (e, value, row, index) {
        if(lastValueRow.nom !== undefined){
            resetRowWithLastValue();
        }
        lastValueRow.nom = row.nom;
        lastValueRow.type = row.type;
        lastValueRow.adresse = row.adresse;
        lastValueRow.codepostal = row.codepostal;
        lastValueRow.ville = row.ville;
        lastValueRow.url = row.url;
        lastValueRow.latitude = row.latitude;
        lastValueRow.longitude = row.longitude;
        lastValueRow.index = index;
        
        newValueEdit.nom = row.nom;
        newValueEdit.type = row.type;
        newValueEdit.adresse = row.adresse;
        newValueEdit.codepostal = row.codepostal;
        newValueEdit.ville = row.ville;
        newValueEdit.url = row.url;
        newValueEdit.latitude = row.latitude;
        newValueEdit.longitude = row.longitude;

        $table.bootstrapTable('updateRow', {
            index: index,
            row: {
                nom: `<input type="text" value="${row.nom}" class="form-control is-valid" name="nomEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checknomEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                type: `<input type="text" value="${row.type}" class="form-control is-valid" name="typeEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checktypeEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                adresse: `<input type="text" value="${row.adresse}" class="form-control is-valid" name="adresseEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checkadresseEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                codepostal: `<input type="text" value="${row.codepostal}" class="form-control is-valid" name="codepostalEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checkcodepostalEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                ville: `<input type="text" value="${row.ville}" class="form-control is-valid" name="villeEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checkvilleEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                url: `<input type="text" value="${row.url}" class="form-control is-valid" name="urlEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checkurlEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                latitude: `<input type="number" max="99.999999" min="-99.999999" step="0.000001" value="${row.latitude}" class="form-control is-valid" name="latitudeEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checklatitudeEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                longitude: `<input type="number" max="99.999999" min="-99.999999" step="0.000001" value="${row.longitude}" class="form-control is-valid" name="longitudeEdit" oninput="setValueEdit(event)"/><div class="invalid-feedback checklongitudeEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                actions: `<div class="d-flex justify-content-center gap-3 pb-4"><a href="javascript:void(0)" title="valider"><i class="validEdit bi bi-check text-success fs-4"></i></a><a href="javascript:void(0)" title="annuler"><i class="cancelEdit bi bi-x text-danger fs-4"></i></a></div>`,
            }
        });
    }
}
$remove.click(function () {
    if(confirm(`Êtes-vous sûre de vouloir supprimer ces éléments ?`)){
        postData(`?delete=1&multiple=${selections.join(",")}`, {
            bootstraptable: 1
        }).then(data=>{
            console.log(data);
            $table.bootstrapTable('refresh');
            $remove.prop('disabled', true);
        });
    }
});
function getIdSelections() {
    return $.map($table.bootstrapTable('getSelections'), function (row) {
        return row.id;
    })
}
function setValueEdit(e){

    switch(e.target.name){
        case "nomEdit":
            newValueEdit.nom = e.target.value;
            break;
        case "typeEdit":
            newValueEdit.type = e.target.value;
            break;
        case "adresseEdit":
            newValueEdit.adresse = e.target.value;
            break;
        case "codepostalEdit":
            newValueEdit.codepostal = e.target.value;
            break;
        case "villeEdit":
            newValueEdit.ville = e.target.value;
            break;
        case "urlEdit":
            newValueEdit.url = e.target.value;
            break;
        case "latitudeEdit":
            newValueEdit.latitude = e.target.value;
            break;
        case "longitudeEdit":
            newValueEdit.longitude = e.target.value;
            break;
        default: return;
    }

    const check = checkNewValueEditByName(e.target.name);

    if(check !== true){
        e.target.classList.remove("is-valid");
        e.target.classList.add("is-invalid");
        $('.check' + e.target.name).text(check);
    }else{
        e.target.classList.remove("is-invalid");
        e.target.classList.add("is-valid");
    }
}
function resetRowWithLastValue(){
    $table.bootstrapTable('updateRow', {
        index: lastValueRow.index,
        row: {
            nom: lastValueRow.nom,
            type: lastValueRow.type,
            adresse: lastValueRow.adresse,
            codepostal: lastValueRow.codepostal,
            ville: lastValueRow.ville,
            url: lastValueRow.url,
            latitude: lastValueRow.latitude,
            longitude: lastValueRow.longitude,
            actions: baseActions
        }
    });
    lastValueRow = {};
}

function formatBaseActions(a){
    return a === undefined ? baseActions : a;
}

function checkCanValidateEdit(){
    for (const key in newValueEdit) {
        if(checkNewValueEditByName(key+"Edit") === true) continue;
        console.log(key+"Edit");
        console.log(newValueEdit[key]);
        return false;
    }
    return true;
}

function checkNewValueEditByName(name){
    switch(name){
        case "nomEdit":
            if(newValueEdit.nom.trim().length === 0)
                return "Ne dois pas être vide";
            if(newValueEdit.nom.trim().length > 50)
                return "Ne dois pas dépasser 50 caractères";
            return true;
        case "typeEdit":
            if(newValueEdit.type.trim().length === 0)
                return "Ne dois pas être vide";
            if(newValueEdit.type.trim().length > 20)
                return "Ne dois pas dépasser 20 caractères";
            return true;
        case "adresseEdit":
            if(newValueEdit.adresse.trim().length === 0)
                return "Ne dois pas être vide";
            if(newValueEdit.adresse.trim().length > 100)
                return "Ne dois pas dépasser 100 caractères";
            return true;
        case "codepostalEdit":
            if(/^\d\d\d\d$/.test(newValueEdit.codepostal.trim()))
                return true;
            return "Doit être 4 chiffres";
        case "villeEdit":
            if(newValueEdit.ville.trim().length === 0)
                return "Ne dois pas être vide";
            if(newValueEdit.ville.trim().length > 20)
                return "Ne dois pas dépasser 20 caractères";
            return true;
        case "urlEdit":
            if(newValueEdit.url.trim().length > 200)
                return "Ne dois pas dépasser 200 caractères";
            if(/^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,190}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()!@:%_\+.~#?&\/\/=]*)/.test(newValueEdit.url.trim()))
                return true
            return "URL incorrect";
        case "latitudeEdit":
            if(/^-?\d{1,2}(\.\d{1,6})?$/.test(newValueEdit.latitude.trim()))
                return true;
            return "Format incorrect";
        case "longitudeEdit":
            if(/^-?\d{1,2}(\.\d{1,6})?$/.test(newValueEdit.longitude.trim()))
                return true;
            return "Format incorrect"
        default: return;
    }
}

async function postData(url = '', data = {}) {
    // Transforme les données en chaîne de caractères de type x-www-form-urlencoded
    const formData = new URLSearchParams();
    for(const key in data) {
        formData.append(key, data[key]);
    }

    // Les options par défaut sont marquées d'un *
    const response = await fetch(url, {
        method: 'POST',
        mode: 'same-origin',
        cache: 'no-cache',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: formData, // Le type de données du corps doit correspondre à l'en-tête "Content-Type"
    });
    return response.json(); // Convertit la réponse JSON en objets JavaScript natifs
}
  

addEventListener('keydown', e => e.key === "Enter" && $('.validEdit').length!==0 ? $('.validEdit').click() : undefined);

$(function(){
    $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        selections = getIdSelections();
    });
    
    $table.on('page-change.bs.table', function (){
        if(lastValueRow.name !== undefined){
            resetRowWithLastValue();
        }
    });
});