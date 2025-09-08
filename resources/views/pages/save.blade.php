<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ma page</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 text-center">
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray" style="margin-bottom: 0">CAHIER DE CHARGES</h4>
                    <span class="alt-font margin-20px-bottom text-blue-night d-inline-block text-uppercase font-weight-500 letter-spacing-1px">- Site Internet –</span>
                </div>
                <div class="col-12">
                    <!-- start contact form -->
                    <form method="post" action="{{ route('save') }}" novalidate>
                        @csrf
                        <div class="row row-cols-1">
                            <div class="mb-3">
                                <label for="customer">Client (Société)</label>
                                <input class="medium-input bg-white" type="text" id="customer" name="customer" value="{{ request()->get('customer') }}">
                            </div>
                            <div class="mb-3">
                                <label for="phone">Téléphone</label>
                                <input class="medium-input bg-white" type="text" id="phone" name="phone" value="{{ request()->get('phone') }}">
                            </div>
                            <fieldset>
                                <legend>I.	Informations relatives à la conception</legend>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">a. Votre projet concerne :</label>
                                    <div class="d-flex">
                                        <div class="mr-4">
                                            <input type="radio"
                                                   id="about-1"
                                                   name="about"
                                                {{ request()->get('about') === 'La création d’un site Internet' ? 'checked' : '' }}
                                                value="La création d’un site Internet"
                                            >
                                            <label for="type-1">La création d’un site Internet</label>
                                        </div>
                                        <div>
                                            <input type="radio"
                                                   id="about-2"
                                                   name="about"
                                                {{ request()->get('about') === 'La refonte d’un site Internet' ? 'checked' : '' }}
                                                value="La refonte d’un site Internet">
                                            <label for="type-2">La refonte d’un site Internet</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="denomination">b. Quelle est la dénomination de votre entreprise ou votre affaire ?</label>
                                    <input class="medium-input bg-white" name="denomination" type="text" id="denomination" value="{{ request()->get('denomination') }}">
                                </div>
                                <div class="mb-1">
                                    <label for="meaning">Que signifie ce nom ou qu’exprime-t-il ?</label>
                                    <input class="medium-input bg-white" name="meaning" type="text" id="meaning" value="{{ request()->get('meaning') }}">
                                </div>
                                <div class="mb-1">
                                    <label for="sector">c. Dans quel secteur évoluez-vous ?</label>
                                    <input class="medium-input bg-white" name="sector" type="text" id="sector" value="{{ request()->get('sector') }}">
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">d. Avez-vous une charte graphique ?</label>
                                    <div class="d-flex">
                                        <div class="mr-4">
                                            <input type="radio" id="charte_oui" name="charte" value="oui" {{ request()->get('charte') === 'oui' ? 'checked' : '' }}>
                                            <label for="charte_oui">Oui</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="charte_non" name="charte" value="non" {{ request()->get('charte') === 'non' ? 'checked' : '' }}>
                                            <label for="charte_non">Non</label>
                                        </div>
                                    </div>
                                    <div>
                                        <p>
                                            <span class="text-danger">*</span> Si Oui, prière de nous la faire parvenir.
                                            <br>
                                            <span class="text-danger">*</span>
                                            Si Non, nous pouvons la concevoir pour vous grâce à notre équipe de DESIGN ou vous pouvez juste nous parler de vos marques de
                                            couleurs et nous envoyer votre logo si vous en avez.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="description">e.Décrivez la perception visuelle souhaitée pour votre site</label>
                                    <textarea class="medium-textarea h-200px bg-white"
                                              name="description"
                                              id="description">{{ request()->get('description') }}</textarea>
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">De quel type s’agit-il ?</label>
                                    <div class="">
                                        <div class="mr-4">
                                            <input type="radio" id="consultation" name="type"
                                                {{ request()->get('type') === 'Un site pour consultation d’informations de l’entreprise' ? 'checked' : '' }}
                                                value="Un site pour consultation d’informations de l’entreprise"
                                            >
                                            <label for="consultation">Un site pour consultation d’informations de l’entreprise</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="e-commerce" name="type"
                                                   {{ request()->get('type') === 'Un E-Commerce' ? 'checked' : '' }}
                                                   value="Un E-Commerce">
                                            <label for="e-commerce">Un E-Commerce</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="app_web" name="type"
                                                   {{ request()->get('type') === 'Une application WEB' ? 'checked' : '' }}
                                                   value="Une application WEB">
                                            <label for="app_web">Une application WEB</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="social_network" name="type"
                                                   {{ request()->get('type') === 'Un Réseau social' ? 'checked' : '' }}
                                                   value="Un Réseau social">
                                            <label for="social_network">Un Réseau social</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="other" name="type"
                                                   {{ request()->get('type') === 'Autre' ? 'checked' : '' }}
                                                   value="Autre">
                                            <label for="other_description">Autre</label>
                                            <input class="medium-input bg-white" type="text" id="other_description" name="other_description"
                                                   value="{{ request()->get('other_description') }}">
                                        </div>
                                        <span class="text-danger">*</span>
                                        Si possible, mentionnez les noms de domaine (ou Copier/coller URL du site) de deux ou trois
                                        sites auxquels vous aimeriez que votre site ressemble et énoncez les raisons de votre admiration quant à cela.
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="functionality">f.	Quelle sont les fonctionnalités particulières que vous aimerez avoir dans votre site ?</label>
                                    <textarea class="medium-textarea h-200px bg-white" name="functionality" id="functionality">{{ request()->get('functionality') }}</textarea>
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">
                                        g. Quelles sont les informations qui devront être mises dans votre site ? Il y aura que des textes ou des images également?
                                    </label>
                                    <div class="checkbox-group">
                                        <div class="mr-4">
                                            <input type="checkbox" id="text" name="information[]" checked
                                                   {{ request()->get('information') && in_array('Du Texte', request()->get('information'), true) ? 'checked' : '' }}
                                                   value="Du Texte">
                                            <label for="text">Du Texte</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="images" name="information[]" checked
                                                   {{ request()->get('information') && in_array('Des Images', request()->get('information'), true) ? 'checked' : '' }}
                                                   value="Des Images">
                                            <label for="images">Des Images</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="videos"
                                                   name="information[]"
                                                   {{ request()->get('information') && in_array('Des Vidéos', request()->get('information'), true) ? 'checked' : '' }}
                                                   value="Des Vidéos">
                                            <label for="videos">Des Vidéos</label>
                                        </div>
                                        <div>
                                            <input type="checkbox"
                                                   id="all"
                                                   name="information[]"
                                                   {{ request()->get('information') && in_array('Tout', request()->get('information'), true) ? 'checked' : '' }}
                                                   value="Tout"
                                            >
                                            <label for="all">Tout</label>
                                        </div>
                                        <div>
                                            <input type="checkbox"  id="info_other"
                                                   name="information[]"
                                                   {{ request()->get('information') && in_array('Autre', request()->get('information'), true) ? 'checked' : '' }}
                                                   value="Autre"
                                            >
                                            <label for="info_other">Autre</label>
                                            @error('information')
                                            <div class="invalid-feedback text-danger" style="display: block">{{ $message }}</div>
                                            @enderror
                                            <input class="medium-input bg-white"
                                                   name="information_description"
                                                   type="text" id="information_description" value="{{ request()->get('information_description') }}"
                                            >
                                            @error('information_description')
                                            <div class="invalid-feedback text-danger" style="display: block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <p class="mb-0">
                                            Voici les informations de base à fournir :
                                        </p>
                                        <table class="table-style-02">
                                            <tbody>
                                            <tr>
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>Votre message de bienvenue dans le site</td>
                                            </tr>
                                            <tr class="bg-light-gray">
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>Votre mission, Vision, objectifs et valeurs</td>
                                            </tr>
                                            <tr>
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>Vos services</td>
                                            </tr>
                                            <tr class="bg-light-gray">
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>Vos contacts</td>
                                            </tr>
                                            <tr>
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>Votre slogan, message d’accroche</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="mb-0">
                                            * Indications :
                                        </p>
                                        <table class="table-style-02">
                                            <tbody>
                                            <tr>
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>Pour les textes, il serait préférable de nous mettre le tout sous un format WORD, PDF ou TXT ;</td>
                                            </tr>
                                            <tr class="bg-light-gray">
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>
                                                    Pour les Images, il faudra les rassembler toutes et nous envoyer le dossier complet zippé ou non zippé. Sans oublier
                                                    que les photos doivent être de bonne qualité (Haute définition) ;
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>
                                                    Par ailleurs, vous pouvez également avoir des images illustratives ou des symboles de votre marque que vous souhaitez
                                                    voir dans votre site. Prière de tout placer dans le dossier précédent ;
                                                </td>
                                            </tr>
                                            <tr class="bg-light-gray">
                                                <th class="text-extra-dark-gray font-weight-500" style="width: 45px">👉</th>
                                                <td>
                                                    Pour le texte qui sera utilisé, notre équipe de relecteurs va procéder à une analyse détaillée pour corriger les
                                                    fautes d’orthographes s’il y en a et va procéder
                                                    également à faire la correspondance entre vos termes et ce qui doit réellement être mis dans le site.
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">h. Avez- vous déjà réservé un nom de domaine et un hébergement ?</label>
                                    <div class="d-flex">
                                        <div class="mr-4">
                                            <input type="radio"
                                                   id="domain_oui"
                                                   name="domain"
                                                   {{ request()->get('domain') === 'oui' ? 'checked' : '' }}
                                                   value="oui">
                                            <label for="domain_oui">Oui</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="domain_non"
                                                   name="domain"
                                                   {{ request()->get('domain') === 'non' ? 'checked' : '' }}
                                                   value="non">
                                            <label for="domain_non">Non</label>
                                        </div>
                                    </div>
                                    <div>
                                        <p>
                                            <label for="domain_description">Si Oui, lequel ? : </label>
                                            <input class="medium-input bg-white" type="text"
                                                   name="domain_description"
                                                   id="domain_description"
                                                   value="{{ request()->get('domain_description') }}">
                                            <br>
                                            Si Non, passez à la question suivante qui a un lien à la précédente
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">i. Comment voudrez-vous que se présente votre nom de domaine ?</label>
                                    <div class="">
                                        <div class="mr-4">
                                            <input type="radio"  id="com"
                                                   name="dns"
                                                   {{ request()->get('dns') === 'www.abc.com' ? 'checked' : '' }}
                                                   value="www.abc.com"
                                            >
                                            <label for="com">www.abc.com</label>
                                        </div>
                                        <div>
                                            <input type="radio"
                                                   id="org"
                                                   name="dns"
                                                {{ request()->get('dns') === 'www.abc.org' ? 'checked' : '' }}
                                                value="www.abc.org"
                                            >
                                            <label for="org">www.abc.org</label>
                                        </div>
                                        <div>
                                            <input type="radio"
                                                   id="fr"
                                                   name="dns"
                                                   {{ request()->get('dns') === 'www.abc.fr' ? 'checked' : '' }}
                                                   value="www.abc.org"
                                            >
                                            <label for="fr">www.abc.fr</label>
                                        </div>
                                        <div>
                                            <input type="radio"
                                                   id="dns_other"
                                                   name="dns"
                                                   {{ request()->get('dns') === 'Autres' ? 'checked' : '' }}
                                                   value="Autres"
                                            >
                                            <label for="dns_other">Autres</label>
                                            <span>Si autres, spécifiez : </span>
                                            <input class="medium-input bg-white" type="text"
                                                   name="dns_description"
                                                   id="dns_description"
                                                   value="{{ request()->get('dns_description') }}">
                                        </div>
                                        <span class="text-danger">*</span>
                                        Si possible, mentionnez les noms de domaine (ou Copier/coller URL du site) de deux ou trois sites auxquels vous aimeriez que votre
                                        site ressemble et énoncez les raisons de votre admiration quant à cela.
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">j. Désirez-vous des mails professionnels
                                        personnalisés, du type <b>gary.mutombo@mon-entreprise.com</b> </label>
                                    <div>
                                        <div class="d-flex">
                                            <div class="mr-4">
                                                <input type="radio"  id="email_pro_yes"
                                                       name="email_pro"
                                                       {{ request()->get('email_pro') === 'oui' ? 'checked' : '' }}
                                                       value="oui">
                                                <label for="email_pro_yes">Oui</label>
                                            </div>
                                            <div>
                                                <input type="radio"  id="email_pro_no"
                                                       name="email_pro"
                                                       {{ request()->get('email_pro') === 'non' ? 'checked' : '' }}
                                                       value="non">
                                                <label for="email_pro_no">Non</label>
                                            </div>
                                        </div>
                                        <div>
                                            <span>Si oui, combien de mail(s) envisagez-vous créer à moyen terme ?</span>
                                            <input class="medium-input bg-white" type="text"
                                                   name="email_pro_description"
                                                   id="email_pro_description"
                                                   value="{{ request()->get('email_pro_description') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">
                                        k.	Votre projet est-il urgent ?
                                    </label>
                                    <div>
                                        <div class="d-flex">
                                            <div class="mr-4">
                                                <input type="radio"  id="urgency_yes"
                                                       name="urgency"
                                                       {{ request()->get('urgency') === 'oui' ? 'checked' : '' }}
                                                       value="oui">
                                                <label for="urgency_yes">Oui</label>
                                            </div>
                                            <div>
                                                <input type="radio"  id="urgency_no"
                                                       name="urgency"
                                                       {{ request()->get('urgency') === 'non' ? 'checked' : '' }}
                                                       value="non">
                                                <label for="urgency_no">Non</label>
                                            </div>
                                        </div>
                                        <div>
                                            <span>Si Oui, quels sont les délais de réalisation souhaités ? (Début et fin de projet)</span>
                                            <div class="d-flex">
                                                <input class="medium-input bg-white" type="date"
                                                       name="urgent_start"
                                                       id="urgent_start"
                                                       value="{{ request()->get('urgent_start') }}" placeholder="Début">
                                                <input class="medium-input bg-white" type="date"
                                                       name="urgent_end"
                                                       id="urgent_end"
                                                       value="{{ request()->get('urgent_end') }}" placeholder="Fin">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="disabledSelect" class="form-label">
                                        l.	Avez-vous prévu un budget pour ce projet ?
                                    </label>
                                    <div>
                                        <div class="d-flex">
                                            <div class="mr-4">
                                                <input type="radio"  id="budget_yes"
                                                       name="budget"
                                                       {{ request()->get('budget') === 'oui' ? 'checked' : '' }}
                                                       value="oui">
                                                <label for="budget_yes">Oui</label>
                                            </div>
                                            <div>
                                                <input type="radio"  id="budget_no"
                                                       name="budget"
                                                       {{ request()->get('budget') === 'non' ? 'checked' : '' }}
                                                       value="non">
                                                <label for="budget_no">Non</label>
                                            </div>
                                        </div>
                                        <div>
                                            <span>Si Oui, combien avez-vous estimé ?</span>
                                            <input class="medium-input bg-white" type="number" placeholder="USD"
                                                   name="budget_description"
                                                   id="budget_description"
                                                   value="{{ request()->get('budget_description') }}">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>II.	Autres spécificités</legend>
                                <ul class="list-style-01 text-extra-dark-gray">
                                    <li><i class="fas fa-check text-extra-medium-gray"></i> N’hésitez pas à poser des questions pour les zones d’ombre ;
                                        <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                                    </li>
                                    <li><i class="fas fa-check text-extra-medium-gray"></i>
                                        Ce document d’enquête relève des stratégies particulières de l’entreprise. Cela étant, il est soumis à une propriété privée et ne
                                        peut être partagé vers une tierce personne si ce n’est l’entreprise avec laquelle MASTAGATE traite
                                        <span class="list-hover bg-white box-shadow-small border-radius-5px"></span>
                                    </li>
                                </ul>
                            </fieldset>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
