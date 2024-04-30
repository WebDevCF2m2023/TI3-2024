const $table = $('#table');
const $remove = $('#remove');
const $add = $('#add');
const selectApiMode = document.querySelector(".select-api-mode");
const baseActions = '<div class="d-flex justify-content-center"><a href="javascript:void(0)" title="editer"><i class="edit bi bi-pen me-4"></i></a><a href="javascript:void(0)" title="supprimer"><i class="remove bi bi-trash text-danger"></i></a></div>';
let selections;
let lastValueRow = {};
let newValueEdit = {};
let newValueInsert = {};
let apiMode;
window.operateEvents = {
    'click .remove': function (e, value, row, index) {
        if(!apiMode){
            window.location = `?delete=${row.id}`;
            return;
        }
        if(confirm(`Êtes-vous sûre de vouloir supprimer l'élément avec comme ID ${row.id} ?`)){
            postData(`?delete=${row.id}&ok`, {
                bootstraptable: index
            }).then(data=>{
                if(data.error !== undefined) popup(data.error, false);
                else popup(`La localisation ${data.delete} a bien été supprimé.`);
                $table.bootstrapTable('refresh');
                $remove.prop('disabled', true);
            });
        }
    },  
    'click .validEdit': function (e, value, row, index) {
        if(!apiMode){
            window.location = `?update=${row.id}`;
            return;
        }
        if(!checkCanValidate(newValueEdit)) return; // TODO MESSAGE
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
            if(data.error !== undefined) popup(data.error, false);
            else if(data.secure !== undefined) popup(data.secure, false);
            else popup(`La localisation ${data.update} a bien été modifié.`);
            $table.bootstrapTable('refresh');
            $remove.prop('disabled', true);
            lastValueRow = {};
        });
    },'click .validInsert': function (e, value, row, index) {
        if(!apiMode){
            window.location = `?addLocation`;
            return;
        }
        if(!checkCanValidate(newValueInsert)) return; // TODO MESSAGE
        postData(`?addLocation`, {
            name: newValueInsert.nom,
            type: newValueInsert.type,
            adresse: newValueInsert.adresse,
            codePostal: newValueInsert.codepostal,
            country: newValueInsert.ville,
            url: newValueInsert.url,
            latitude: newValueInsert.latitude,
            longitude: newValueInsert.longitude,
            bootstraptable: 1
        }).then(data=>{
            if(data.error !== undefined) popup(data.error, false);
            else if(data.secure !== undefined) popup(data.secure, false);
            else popup(`La localisation ${data.add} a bien été crée.`);
            $table.bootstrapTable('refresh');
            $remove.prop('disabled', true);
        });
    },
    'click .cancelEdit': function (e, value, row, index) {
        resetRowWithLastValue();
    },
    'click .cancelInsert': function (e, value, row, index) {
        $table.bootstrapTable('remove', {
            field: 'id',
            values: [-1]
        });
    },
    'click .edit': function (e, value, row, index) {
        if(!apiMode){
            window.location = `?update=${row.id}`;
            return;
        }
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
                nom: `<input type="text" value="${row.nom}" class="form-control is-valid" name="nomEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checknomEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                type: `<input type="text" value="${row.type}" class="form-control is-valid" name="typeEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checktypeEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                adresse: `<input type="text" value="${row.adresse}" class="form-control is-valid" name="adresseEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checkadresseEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                codepostal: `<input type="text" value="${row.codepostal}" class="form-control is-valid" name="codepostalEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checkcodepostalEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                ville: `<input type="text" value="${row.ville}" class="form-control is-valid" name="villeEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checkvilleEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                url: `<input type="text" value="${row.url}" class="form-control is-valid" name="urlEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checkurlEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                latitude: `<input type="number" max="99.999999" min="-99.999999" step="0.000001" value="${row.latitude}" class="form-control is-valid" name="latitudeEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checklatitudeEdit"></div><div class="valid-feedback">Correct 😊</div>`,
                longitude: `<input type="number" max="99.999999" min="-99.999999" step="0.000001" value="${row.longitude}" class="form-control is-valid" name="longitudeEdit" oninput="setValueInput(event)"/><div class="invalid-feedback checklongitudeEdit"></div><div class="valid-feedback">Correct 😊</div>`,
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
            if(data.error !== undefined) popup(data.error, false);
            else popup(`Les locations ${data.multiple} ont bien été supprimé`)
            $table.bootstrapTable('refresh');
            $remove.prop('disabled', true);
        });
    }
});

$add.click(function () {
    if(!apiMode){
        window.location = `?addLocation`;
        return;
    }
    $table.bootstrapTable('insertRow', {
        index: 0,
        row: {
            id: -1,
            nom: `<input type="text" class="form-control is-invalid" name="nomInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checknomInsert">Ne doit pas être vide</div><div class="valid-feedback">Correct 😊</div>`,
            type: `<input type="text" class="form-control is-invalid" name="typeInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checktypeInsert">Ne doit pas être vide</div><div class="valid-feedback">Correct 😊</div>`,
            adresse: `<input type="text" class="form-control is-invalid" name="adresseInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checkadresseInsert">Ne doit pas être vide</div><div class="valid-feedback">Correct 😊</div>`,
            codepostal: `<input type="text" class="form-control is-invalid" name="codepostalInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checkcodepostalInsert">Ne doit pas être vide</div><div class="valid-feedback">Correct 😊</div>`,
            ville: `<input type="text" class="form-control is-invalid" name="villeInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checkvilleInsert">Ne doit pas être vide</div><div class="valid-feedback">Correct 😊</div>`,
            url: `<input type="text" class="form-control is-invalid" name="urlInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checkurlInsert">Ne doit pas être vide</div><div class="valid-feedback">Correct 😊</div>`,
            latitude: `<input type="number" max="99.999999" min="-99.999999" step="0.000001" class="form-control is-invalid" name="latitudeInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checklatitudeInsert">Format incorrect</div><div class="valid-feedback">Correct 😊</div>`,
            longitude: `<input type="number" max="99.999999" min="-99.999999" step="0.000001" class="form-control is-invalid" name="longitudeInsert" oninput="setValueInput(event)"/><div class="invalid-feedback checklongitudeInsert">Format incorrect</div><div class="valid-feedback">Correct 😊</div>`,
            actions: `<div class="d-flex justify-content-center gap-3 pb-4"><a href="javascript:void(0)" title="valider"><i class="validInsert bi bi-check text-success fs-4"></i></a><a href="javascript:void(0)" title="annuler"><i class="cancelInsert bi bi-x text-danger fs-4"></i></a></div>`,
        }
      });
    newValueInsert = {};
});
function getIdSelections() {
    return $.map($table.bootstrapTable('getSelections'), function (row) {
        return row.id;
    })
}
function setValueInput(e){
    const regex = /(Edit|Insert)/gi;
    const name = e.target.name.replace(regex, '');
    switch(name){
        case "nom":
            if(e.target.name.includes("Edit"))
                newValueEdit.nom = e.target.value;
            else
                newValueInsert.nom = e.target.value;
            break;
        case "type":
            if(e.target.name.includes("Edit"))
                newValueEdit.type = e.target.value;            
            else
                newValueInsert.type = e.target.value;
            break;
        case "adresse":
            if(e.target.name.includes("Edit"))
                newValueEdit.adresse = e.target.value;            
            else
                newValueInsert.adresse = e.target.value;
            break;
        case "codepostal":
            if(e.target.name.includes("Edit"))
                newValueEdit.codepostal = e.target.value;            
            else
                newValueInsert.codepostal = e.target.value;
            break;
        case "ville":
            if(e.target.name.includes("Edit"))
                newValueEdit.ville = e.target.value;            
            else
                newValueInsert.ville = e.target.value;
            break;
        case "url":
            if(e.target.name.includes("Edit"))
                newValueEdit.url = e.target.value;            
            else
                newValueInsert.url = e.target.value;
            break;
        case "latitude":
            if(e.target.name.includes("Edit"))
                newValueEdit.latitude = e.target.value;            
            else
                newValueInsert.latitude = e.target.value;
            break;
        case "longitude":
            if(e.target.name.includes("Edit"))
                newValueEdit.longitude = e.target.value;            
            else
                newValueInsert.longitude = e.target.value;
            break;
        default: return;
    }

    const check = checkNewValueInputByName(name, e.target.name.includes("Edit") ? newValueEdit : newValueInsert);

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

function checkCanValidate(objectToCheck){
    for (const key in objectToCheck) {
        if(checkNewValueInputByName(key, objectToCheck) === true) continue;
        return false;
    }
    return true;
}

function checkNewValueInputByName(name, objectToCheck){
    switch(name){
        case "nom":
            if(objectToCheck.nom.trim().length === 0)
                return "Ne dois pas être vide";
            if(objectToCheck.nom.trim().length > 50)
                return "Ne dois pas dépasser 50 caractères";
            return true;
        case "type":
            if(objectToCheck.type.trim().length === 0)
                return "Ne dois pas être vide";
            if(objectToCheck.type.trim().length > 20)
                return "Ne dois pas dépasser 20 caractères";
            return true;
        case "adresse":
            if(objectToCheck.adresse.trim().length === 0)
                return "Ne dois pas être vide";
            if(objectToCheck.adresse.trim().length > 100)
                return "Ne dois pas dépasser 100 caractères";
            return true;
        case "codepostal":
            if(/^\d\d\d\d$/.test(objectToCheck.codepostal.trim()))
                return true;
            return "Doit être 4 chiffres";
        case "ville":
            if(objectToCheck.ville.trim().length === 0)
                return "Ne dois pas être vide";
            if(objectToCheck.ville.trim().length > 20)
                return "Ne dois pas dépasser 20 caractères";
            return true;
        case "url":
            if(objectToCheck.url.trim().length > 200)
                return "Ne dois pas dépasser 200 caractères";
            if(/^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,190}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()!@:%_\+.~#?&\/\/=]*)/.test(objectToCheck.url.trim()))
                return true
            return "URL incorrect";
        case "latitude":
            if(/^-?\d{1,2}(\.\d{1,6})?$/.test(objectToCheck.latitude.trim()))
                return true;
            return "Format incorrect";
        case "longitude":
            if(/^-?\d{1,2}(\.\d{1,6})?$/.test(objectToCheck.longitude.trim()))
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

/**
 * 
 * @param {string} message
 */
function popup(message, success = true){
    const div = document.createElement("div");
    div.className = "popup d-flex justify-content-center rounded fw-bold text-light align-items-start position-fixed py-2 px-4 top-0 end-0 me-3 " + (success ? "bg-success border border-success" : "bg-danger border border-danger");
    div.style.minWidth = "300px";
    div.style.maxWidth = "600px";
    div.textContent = message;

    document.body.appendChild(div);

    setTimeout(() => {
        document.body.removeChild(div);
    }, 5 * 1000 /* 5s */);
}

function selectMode(e){
    const value = +e.target.value;
    if(value === 1) setApiMode(true);
    else setApiMode(false);
}

function setApiMode(value){
    apiMode = value;
    localStorage.setItem("apiMode", value);
}

function getApiMode(){
    let store = localStorage.getItem("apiMode");
    if(store === null) store = true;

    return store === "true";
}

addEventListener('keydown', e => e.key === "Enter" && $('.validEdit').length!==0 ? $('.validEdit').click() : undefined);

$(function(){
    $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        selections = getIdSelections();
    });
    
    $table.on('page-change.bs.table', function (){
        lastValueRow = {};
    });

    apiMode = getApiMode();
    if(!apiMode){
        selectApiMode.children[0].selected = false;
        selectApiMode.children[1].selected = true;
    }
});