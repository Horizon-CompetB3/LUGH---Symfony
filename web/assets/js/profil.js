

function diplayNoneFormRea() {
    document.getElementById('info_artiste').classList.add('none');
    document.getElementById('real-content').classList.remove('none');
    document.getElementById('complete_artiste').classList.add('none');
    document.getElementById('h2-info-art').classList.add('none');
    document.getElementById('h2-pro-art').classList.add('none');
    document.getElementById('h2-rea-art').classList.remove('none');
    document.getElementById('side-info-art').classList.add('none');
    document.getElementById('side-pro-art').classList.add('none');
    document.getElementById('side-rea-art').classList.remove('none');
    document.getElementById('side-info-art-mobile').classList.add('none');
    document.getElementById('side-pro-art-mobile').classList.add('none');
    document.getElementById('side-rea-art-mobile').classList.remove('none');
    document.getElementById('side-button-info-art').classList.remove('left-button-active');
    document.getElementById('side-button-pro-art').classList.remove('left-button-active');
    document.getElementById('side-button-rea-art').classList.add('left-button-active')
}

function diplayNoneFormComp() {
    document.getElementById('info_artiste').classList.add('none');
    document.getElementById('complete_artiste').classList.remove('none');
    document.getElementById('real-content').classList.add('none');
    document.getElementById('h2-info-art').classList.remove('none');
    document.getElementById('h2-pro-art').classList.add('none');
    document.getElementById('h2-rea-art').classList.add('none');
    document.getElementById('side-info-art').classList.remove('none');
    document.getElementById('side-pro-art').classList.add('none');
    document.getElementById('side-rea-art').classList.add('none');
    document.getElementById('side-info-art-mobile').classList.remove('none');
    document.getElementById('side-pro-art-mobile').classList.add('none');
    document.getElementById('side-rea-art-mobile').classList.add('none');
    document.getElementById('side-button-info-art').classList.add('left-button-active');
    document.getElementById('side-button-pro-art').classList.remove('left-button-active');
    document.getElementById('side-button-rea-art').classList.remove('left-button-active')
}

function diplayNoneFormInfo() {
    document.getElementById('info_artiste').classList.remove('none');
    document.getElementById('complete_artiste').classList.add('none');
    document.getElementById('real-content').classList.add('none');
    document.getElementById('h2-info-art').classList.add('none');
    document.getElementById('h2-pro-art').classList.remove('none');
    document.getElementById('h2-rea-art').classList.add('none');
    document.getElementById('side-info-art').classList.add('none');
    document.getElementById('side-pro-art').classList.remove('none');
    document.getElementById('side-rea-art').classList.add('none');
    document.getElementById('side-info-art-mobile').classList.add('none');
    document.getElementById('side-pro-art-mobile').classList.remove('none');
    document.getElementById('side-rea-art-mobile').classList.add('none');
    document.getElementById('side-button-info-art').classList.remove('left-button-active');
    document.getElementById('side-button-pro-art').classList.add('left-button-active');
    document.getElementById('side-button-rea-art').classList.remove('left-button-active')
}

function diplayNoneFormInfoEnt() {
    document.getElementById('profil-ent').classList.add('none');
    document.getElementById('ident-ent').classList.remove('none');
    document.getElementById('h2-info-ent').classList.remove('none');
    document.getElementById('h2-pro-ent').classList.add('none');
    document.getElementById('side-info-ent').classList.remove('none');
    document.getElementById('side-pro-ent').classList.add('none');
    document.getElementById('side-button-info-ent').classList.add('left-button-active');
    document.getElementById('side-button-pro-ent').classList.remove('left-button-active');
    document.getElementById('side-info-ent-mobile').classList.remove('none');
    document.getElementById('side-pro-ent-mobile').classList.add('none')
}

function diplayNoneFormProEnt() {
    document.getElementById('profil-ent').classList.remove('none');
    document.getElementById('ident-ent').classList.add('none');
    document.getElementById('h2-info-ent').classList.add('none');
    document.getElementById('h2-pro-ent').classList.remove('none');
    document.getElementById('side-info-ent').classList.add('none');
    document.getElementById('side-pro-ent').classList.remove('none');
    document.getElementById('side-info-ent-mobile').classList.add('none');
    document.getElementById('side-pro-ent-mobile').classList.remove('none');
    document.getElementById('side-button-info-ent').classList.remove('left-button-active');
    document.getElementById('side-button-pro-ent').classList.add('left-button-active')
}

var btnprofil = document.getElementById('side-info-ent');
if ($("#side-info-ent").is('none')) {
    document.getElementById('side-info-ent').classList.add('side-visible')
}
;