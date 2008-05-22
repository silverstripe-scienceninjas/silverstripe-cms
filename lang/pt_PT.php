<?php

/**
 * Portuguese (Portugal) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('pt_PT', $lang) && is_array($lang['pt_PT'])) {
	$lang['pt_PT'] = array_merge($lang['en_US'], $lang['pt_PT']);
} else {
	$lang['pt_PT'] = $lang['en_US'];
}

$lang['pt_PT']['AssetAdmin']['CHOOSEFILE'] = 'Escolha ficheiro ';
$lang['pt_PT']['AssetAdmin']['CONTENTMODBY'] = 'Conteúdo modificável por';
$lang['pt_PT']['AssetAdmin']['CONTENTUSABLEBY'] = 'Conteúdo usável por';
$lang['pt_PT']['AssetAdmin']['CREATED'] = 'Criado em';
$lang['pt_PT']['AssetAdmin']['DELETEDX'] = '%s ficheiros apagado(s).%s';
$lang['pt_PT']['AssetAdmin']['DELETEUNUSEDTHUMBNAILS'] = 'Apagar Miniaturas não utilizadas';
$lang['pt_PT']['AssetAdmin']['DELSELECTED'] = 'Apagar ficheiros seleccionados';
$lang['pt_PT']['AssetAdmin']['DETAILSTAB'] = 'Detalhes';
$lang['pt_PT']['AssetAdmin']['FILENAME'] = 'Ficheiro';
$lang['pt_PT']['AssetAdmin']['FILESREADY'] = 'Ficheiros prontos a enviar:';
$lang['pt_PT']['AssetAdmin']['FILESTAB'] = 'Ficheiros';
$lang['pt_PT']['AssetAdmin']['LASTEDITED'] = 'Actualizado em';
$lang['pt_PT']['AssetAdmin']['MOVEDX'] = '%s ficheiros movidos';
$lang['pt_PT']['AssetAdmin']['NEWFOLDER'] = 'Nova Pasta';
$lang['pt_PT']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Não existe nada para enviar';
$lang['pt_PT']['AssetAdmin']['NOWBROKEN'] = 'Esta páginas contêm agora links quebrados:';
$lang['pt_PT']['AssetAdmin']['ONLYADMINS'] = 'Apenas administradores podem enviar ficheiros.';
$lang['pt_PT']['AssetAdmin']['OWNER'] = 'Proprietário';
$lang['pt_PT']['AssetAdmin']['SAVEDFILE'] = 'Ficheiro %s gravado';
$lang['pt_PT']['AssetAdmin']['SAVEFOLDERNAME'] = 'Gravar nome da pasta';
$lang['pt_PT']['AssetAdmin']['TITLE'] = 'Título';
$lang['pt_PT']['AssetAdmin']['TOOLARGE'] = '%s é demasiado grande (%s). Ficheiros deste tipo não podem ser maiores que %s';
$lang['pt_PT']['AssetAdmin']['TYPE'] = 'Tipo';
$lang['pt_PT']['AssetAdmin']['UNUSEDFILESTAB'] = 'Ficheiros não utilizados';
$lang['pt_PT']['AssetAdmin']['UNUSEDFILESTITLE'] = 'Ficheiros não utilizados';
$lang['pt_PT']['AssetAdmin']['UNUSEDTHUMBNAILSTITLE'] = 'Miniaturas não utilizadas';
$lang['pt_PT']['AssetAdmin']['UPLOAD'] = 'Enviar os ficheiros abaixo';
$lang['pt_PT']['AssetAdmin']['UPLOADEDX'] = '%s ficheiros enviados';
$lang['pt_PT']['AssetAdmin']['UPLOADTAB'] = 'Enviar';
$lang['pt_PT']['AssetAdmin']['VIEWASSET'] = 'Ver ficheiro';
$lang['pt_PT']['AssetAdmin']['VIEWEDITASSET'] = 'Ver/Editar Ficheiro';
$lang['pt_PT']['AssetAdmin_left.ss']['CREATE'] = 'Criar';
$lang['pt_PT']['AssetAdmin_left.ss']['DELETE'] = 'Apagar';
$lang['pt_PT']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Apagar as pastas seleccionadas';
$lang['pt_PT']['AssetAdmin_left.ss']['FOLDERS'] = 'Pastas';
$lang['pt_PT']['AssetAdmin_left.ss']['GO'] = 'Ir';
$lang['pt_PT']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Seleccione as pastas que quer apagar, em seguida pressione o botão abaixo';
$lang['pt_PT']['AssetAdmin_left.ss']['TOREORG'] = 'Para reorganizar as suas pastas, arraste-as para onde deseja.';
$lang['pt_PT']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Por favor escolha uma página na esquerda.';
$lang['pt_PT']['AssetAdmin_right.ss']['WELCOME'] = 'Bem vindo a';
$lang['pt_PT']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Não tem permissões para enviar ficheiros para esta pasta.';
$lang['pt_PT']['AssetTableField']['CREATED'] = 'Criado em';
$lang['pt_PT']['AssetTableField']['DIM'] = 'Dimensões';
$lang['pt_PT']['AssetTableField']['FILENAME'] = 'Ficheiro';
$lang['pt_PT']['AssetTableField']['LASTEDIT'] = 'Actualizado em';
$lang['pt_PT']['AssetTableField']['NOLINKS'] = 'Este ficheiro não se encontra referenciado em nenhuma página.';
$lang['pt_PT']['AssetTableField']['OWNER'] = 'Proprietário';
$lang['pt_PT']['AssetTableField']['PAGESLINKING'] = 'As seguintes páginas contêm links para este ficheiro:';
$lang['pt_PT']['AssetTableField']['SIZE'] = 'Tamanho';
$lang['pt_PT']['AssetTableField.ss']['DELFILE'] = 'Apagar este ficheiro';
$lang['pt_PT']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Arraste a pasta na esquerda para mover o ficheiro';
$lang['pt_PT']['AssetTableField']['TITLE'] = 'Título';
$lang['pt_PT']['AssetTableField']['TYPE'] = 'Tipo';
$lang['pt_PT']['BulkLoaderAdmin']['CONFIRMBULK'] = 'Confirmar o carregamento de dados em volume';
$lang['pt_PT']['BulkLoaderAdmin']['CSVFILE'] = 'Ficheiro CSV';
$lang['pt_PT']['BulkLoaderAdmin']['DATALOADED'] = 'Estes dados foram carregados';
$lang['pt_PT']['BulkLoaderAdmin']['PRESSCNT'] = 'Pressione continuar para carregar estes dados';
$lang['pt_PT']['BulkLoaderAdmin']['PREVIEW'] = 'Pré-visualizar';
$lang['pt_PT']['BulkLoaderAdmin_left.ss']['BATCHEF'] = 'Funções de Volume';
$lang['pt_PT']['BulkLoaderAdmin_left.ss']['FUNCTIONS'] = 'Funções';
$lang['pt_PT']['BulkLoaderAdmin_preview.ss']['RES'] = 'Resultados';
$lang['pt_PT']['CMSLeft.ss']['DELPAGE'] = 'Apagar páginas...';
$lang['pt_PT']['CMSLeft.ss']['DELPAGES'] = 'Apagar as páginas seleccionadas';
$lang['pt_PT']['CMSLeft.ss']['GO'] = 'Ir';
$lang['pt_PT']['CMSLeft.ss']['NEWPAGE'] = 'Nova página...';
$lang['pt_PT']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Seleccione as páginas que deseja apagar, em seguida pressione o botão abaixo';
$lang['pt_PT']['CMSLeft.ss']['SITECONT'] = 'Conteúdo';
$lang['pt_PT']['CMSMain']['CANCEL'] = 'Cancelar';
$lang['pt_PT']['CMSMain']['CHOOSEREPORT'] = '(Escolha Relatório)';
$lang['pt_PT']['CMSMain']['COMPARINGV'] = 'Encontra-se a comparar a versão #%d e #%d';
$lang['pt_PT']['CMSMain']['COPYPUBTOSTAGE'] = 'Tem a certeza que deseja copiar o conteúdo publicado para o site de rascunho?';
$lang['pt_PT']['CMSMain']['DELETEFP'] = 'Apagado do site publicado';
$lang['pt_PT']['CMSMain']['EMAIL'] = 'Email';
$lang['pt_PT']['CMSMain']['GO'] = 'Ir';
$lang['pt_PT']['CMSMain']['METADESCOPT'] = 'Descrição';
$lang['pt_PT']['CMSMain']['METAKEYWORDSOPT'] = 'Palavras-Chave';
$lang['pt_PT']['CMSMain']['NEW'] = 'Novo ';
$lang['pt_PT']['CMSMain']['NOCONTENT'] = 'sem conteúdo';
$lang['pt_PT']['CMSMain']['NOTHINGASSIGNED'] = 'Não tem tarefas.';
$lang['pt_PT']['CMSMain']['NOWAITINGON'] = 'Não se encontra à espera de tarefas de outros.';
$lang['pt_PT']['CMSMain']['NOWBROKEN'] = ' As seguintes páginas contêm agora links quebrados:';
$lang['pt_PT']['CMSMain']['NOWBROKEN2'] = 'Os respectivos proprietários receberam um email e brevemente as páginas serão corrigidas.';
$lang['pt_PT']['CMSMain']['OK'] = 'OK';
$lang['pt_PT']['CMSMain']['PAGEDEL'] = '%d página apagada ';
$lang['pt_PT']['CMSMain']['PAGENOTEXISTS'] = 'Esta página não existe';
$lang['pt_PT']['CMSMain']['PAGEPUB'] = '%d página publicada ';
$lang['pt_PT']['CMSMain']['PAGESDEL'] = '%d páginas apagadas ';
$lang['pt_PT']['CMSMain']['PAGESPUB'] = '%d páginas publicadas ';
$lang['pt_PT']['CMSMain']['PAGETYPEOPT'] = 'Tipo de Página';
$lang['pt_PT']['CMSMain']['PRINT'] = 'Imprimir';
$lang['pt_PT']['CMSMain']['PUBALLCONFIRM'] = 'Por favor, publique todas as páginas no site, copiando o conteúdo em rascunho para o publicado';
$lang['pt_PT']['CMSMain']['PUBALLFUN'] = 'Funcionalidade "Publicar Todas"';
$lang['pt_PT']['CMSMain']['PUBALLFUN2'] = 'Ao pressionar este botão, irá fazer o equivalente a editar todas as páginas e pressionar "Publicar".  Deve

				ser utilizado quando houve muitas edições ao conteúdo tal como quando o site

				foi editado pela primeira vez.';
$lang['pt_PT']['CMSMain']['PUBPAGES'] = 'Completo: %d páginas publicadas';
$lang['pt_PT']['CMSMain']['REMOVEDFD'] = 'Removido do site de rascunho';
$lang['pt_PT']['CMSMain']['REMOVEDPAGE'] = '\'%s\' removido do site publicado';
$lang['pt_PT']['CMSMain']['RESTORE'] = 'Restaurar';
$lang['pt_PT']['CMSMain']['RESTORED'] = '\'%s\' restaurado com sucesso';
$lang['pt_PT']['CMSMain']['ROLLBACK'] = 'Reverter para esta versão';
$lang['pt_PT']['CMSMain']['ROLLEDBACKPUB'] = 'Revertido para a versão publicada. Novo número de versão é #%d';
$lang['pt_PT']['CMSMain']['ROLLEDBACKVERSION'] = 'Revertido para a versão #%d.  Novo número de versão é #%d';
$lang['pt_PT']['CMSMain']['SAVE'] = 'Gravar';
$lang['pt_PT']['CMSMain']['SENTTO'] = 'Enviado para %s %s para aprovação.';
$lang['pt_PT']['CMSMain']['STATUSOPT'] = 'Estado';
$lang['pt_PT']['CMSMain']['TOTALPAGES'] = 'Total páginas: ';
$lang['pt_PT']['CMSMain']['VERSIONSNOPAGE'] = 'Página #%d não existe';
$lang['pt_PT']['CMSMain']['VIEWING'] = 'Encontra-se a ver a versão #%d, criada em %s';
$lang['pt_PT']['CMSMain']['VISITRESTORE'] = 'visitar restaurar página/(ID)';
$lang['pt_PT']['CMSMain']['WAITINGON'] = 'Encontra-se à espera que outras pessoas completem tarefas nestas <b>%d</b> páginas.';
$lang['pt_PT']['CMSMain']['WORKTODO'] = 'Tem tarefas pendentes nestas <b>%d</b> páginas.';
$lang['pt_PT']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Adicionado ao site de rascunho, ainda não publicado';
$lang['pt_PT']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Adicionar Critério...';
$lang['pt_PT']['CMSMain_left.ss']['BATCHACTIONS'] = 'Acções de Volume';
$lang['pt_PT']['CMSMain_left.ss']['CHANGED'] = 'alterado';
$lang['pt_PT']['CMSMain_left.ss']['CLOSEBOX'] = 'clique para fechar esta caixa';
$lang['pt_PT']['CMSMain_left.ss']['COMMENTS'] = 'Comentários';
$lang['pt_PT']['CMSMain_left.ss']['COMPAREMODE'] = 'Modo de Comparação (clicar 2 abaixo)';
$lang['pt_PT']['CMSMain_left.ss']['CREATE'] = 'Criar';
$lang['pt_PT']['CMSMain_left.ss']['DEL'] = 'apagado';
$lang['pt_PT']['CMSMain_left.ss']['DELETECONFIRM'] = 'Apagar as páginas seleccionadas';
$lang['pt_PT']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Apagado do site de rascunho mas ainda presente no site publicado';
$lang['pt_PT']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Editado no site de rascunho mas não no site publicado';
$lang['pt_PT']['CMSMain_left.ss']['EDITEDSINCE'] = 'Editado desde';
$lang['pt_PT']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Permitir reordenamento ao arrastar';
$lang['pt_PT']['CMSMain_left.ss']['GO'] = 'Ir';
$lang['pt_PT']['CMSMain_left.ss']['KEY'] = 'Chave:';
$lang['pt_PT']['CMSMain_left.ss']['NEW'] = 'novo';
$lang['pt_PT']['CMSMain_left.ss']['OPENBOX'] = 'clique para abrir esta caixa';
$lang['pt_PT']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Histórico de Versões';
$lang['pt_PT']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publicar as páginas seleccionadas';
$lang['pt_PT']['CMSMain_left.ss']['SEARCH'] = 'Procurar';
$lang['pt_PT']['CMSMain_left.ss']['SEARCHTITLE'] = 'Procurar em URL, Título, Título do Menu, e Conteúdo';
$lang['pt_PT']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Seleccione as paginas que deseja modificar, em seguida pressione na acção:';
$lang['pt_PT']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Seleccione as páginas que deseja duplicar, se os filhos devem ser incluídos, e, onde deseja colocar os duplicados';
$lang['pt_PT']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Mostrar apenas páginas modificadas';
$lang['pt_PT']['CMSMain_left.ss']['SHOWUNPUB'] = 'Mostrar versões não publicadas';
$lang['pt_PT']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Conteúdo do Site e Estrutura';
$lang['pt_PT']['CMSMain_left.ss']['SITEREPORTS'] = 'Relatórios do Site';
$lang['pt_PT']['CMSMain_left.ss']['TASKLIST'] = 'Lista de Tarefas';
$lang['pt_PT']['CMSMain_left.ss']['WAITINGON'] = 'A esperar por';
$lang['pt_PT']['CMSMain_right.ss']['ANYMESSAGE'] = 'Tem alguma mensagem para o seu editor?';
$lang['pt_PT']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Por favor escolha uma página na esquerda.';
$lang['pt_PT']['CMSMain_right.ss']['LOADING'] = 'a carregar...';
$lang['pt_PT']['CMSMain_right.ss']['MESSAGE'] = 'Mensagem';
$lang['pt_PT']['CMSMain_right.ss']['SENDTO'] = 'Enviar para';
$lang['pt_PT']['CMSMain_right.ss']['STATUS'] = 'Estado';
$lang['pt_PT']['CMSMain_right.ss']['SUBMIT'] = 'Submeter para aprovação';
$lang['pt_PT']['CMSMain_right.ss']['WELCOMETO'] = 'Bem vindo a';
$lang['pt_PT']['CMSMain_versions.ss']['AUTHOR'] = 'Autor';
$lang['pt_PT']['CMSMain_versions.ss']['NOTPUB'] = 'Não publicado';
$lang['pt_PT']['CMSMain_versions.ss']['PUBR'] = 'Públicado por';
$lang['pt_PT']['CMSMain_versions.ss']['UNKNOWN'] = 'Desconhecido';
$lang['pt_PT']['CMSMain_versions.ss']['WHEN'] = 'Quando';
$lang['pt_PT']['CMSRight.ss']['CHOOSEPAGE'] = 'Por favor escolha uma página na esquerda.';
$lang['pt_PT']['CMSRight.ss']['ECONTENT'] = 'Editar Conteúdo';
$lang['pt_PT']['CMSRight.ss']['WELCOMETO'] = 'Bem vindo a';
$lang['pt_PT']['CommentList.ss']['CREATEDW'] = 'Comentários são criados sempre que alguma acção do \'workflow\'

	é executada - Publicar, Rejeitar, Submeter.';
$lang['pt_PT']['CommentList.ss']['NOCOM'] = 'Não existem comentários nesta página.';
$lang['pt_PT']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Adicionar Lista';
$lang['pt_PT']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Procurar Listas';
$lang['pt_PT']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Resultados da Pesquisa';
$lang['pt_PT']['ImageEditor.ss']['CANCEL'] = 'cancelar';
$lang['pt_PT']['ImageEditor.ss']['CROP'] = 'cortar';
$lang['pt_PT']['ImageEditor.ss']['HEIGHT'] = 'altura';
$lang['pt_PT']['ImageEditor.ss']['REDO'] = 'refazer';
$lang['pt_PT']['ImageEditor.ss']['ROT'] = 'rodar';
$lang['pt_PT']['ImageEditor.ss']['SAVE'] = 'gravar&nbsp;imagem';
$lang['pt_PT']['ImageEditor.ss']['UNDO'] = 'anular';
$lang['pt_PT']['ImageEditor.ss']['UNTITLED'] = 'Documento sem nome';
$lang['pt_PT']['ImageEditor.ss']['WIDTH'] = 'largura';
$lang['pt_PT']['LeftAndMain']['CHANGEDURL'] = 'URL mudado para \'%s\'';
$lang['pt_PT']['LeftAndMain']['COMMENTS'] = 'Comentários';
$lang['pt_PT']['LeftAndMain']['FILESIMAGES'] = 'Ficheiros e Imagens';
$lang['pt_PT']['LeftAndMain']['HELP'] = 'Ajuda';
$lang['pt_PT']['LeftAndMain']['NEWSLETTERS'] = 'Listas de Email';
$lang['pt_PT']['LeftAndMain']['PAGETYPE'] = 'Tipo de página: ';
$lang['pt_PT']['LeftAndMain']['PERMAGAIN'] = 'Saiu do CMS. Se se deseja autenticar novamente insira as suas credenciais abaixo.';
$lang['pt_PT']['LeftAndMain']['PERMALREADY'] = 'Desculpe, mas, não tem acesso a esta funcionalidade do CMS. Se se deseja autenticar com outras credenciais faça-o abaixo';
$lang['pt_PT']['LeftAndMain']['PERMDEFAULT'] = 'Por favor, escolha um método de autenticação e insira as suas credenciais para aceder ao CMS.';
$lang['pt_PT']['LeftAndMain']['PLEASESAVE'] = 'Por favor, grave a página: Esta página não pode ser actualizada porque ainda não foi gravada.';
$lang['pt_PT']['LeftAndMain']['REPORTS'] = 'Relatórios';
$lang['pt_PT']['LeftAndMain']['REQUESTERROR'] = 'Erro no pedido';
$lang['pt_PT']['LeftAndMain']['SAVED'] = 'gravado';
$lang['pt_PT']['LeftAndMain']['SAVEDUP'] = 'Gravado';
$lang['pt_PT']['LeftAndMain']['SECURITY'] = 'Segurança';
$lang['pt_PT']['LeftAndMain']['SITECONTENT'] = 'Conteúdo do Site';
$lang['pt_PT']['LeftAndMain']['SITECONTENTLEFT'] = 'Conteúdo do Site';
$lang['pt_PT']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Esta é a';
$lang['pt_PT']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'versão actual, tecnicamente é a versão de desenvolvimento';
$lang['pt_PT']['LeftAndMain.ss']['ARCHS'] = 'Site Arquivado';
$lang['pt_PT']['LeftAndMain.ss']['DRAFTS'] = 'Site de Rascunho';
$lang['pt_PT']['LeftAndMain.ss']['EDIT'] = 'Editar';
$lang['pt_PT']['LeftAndMain.ss']['EDITPROFILE'] = 'Perfil';
$lang['pt_PT']['LeftAndMain.ss']['LOADING'] = 'A Carregar...';
$lang['pt_PT']['LeftAndMain.ss']['LOGGEDINAS'] = 'Autenticado como';
$lang['pt_PT']['LeftAndMain.ss']['LOGOUT'] = 'Sair';
$lang['pt_PT']['LeftAndMain.ss']['PUBLIS'] = 'Site Publicado';
$lang['pt_PT']['LeftAndMain.ss']['SSWEB'] = 'Site Silverstripe';
$lang['pt_PT']['LeftAndMain.ss']['SWITCHTO'] = 'Mudar para:';
$lang['pt_PT']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Ver Página:';
$lang['pt_PT']['LeftAndMain']['STATISTICS'] = 'Estatísticas';
$lang['pt_PT']['LeftAndMain']['STATUSTO'] = 'Estado alterado para \'%s\'';
$lang['pt_PT']['LeftAndMain']['TREESITECONTENT'] = 'Conteúdo';
$lang['pt_PT']['MemberList']['ADD'] = 'Adicionar';
$lang['pt_PT']['MemberList']['EMAIL'] = 'Email';
$lang['pt_PT']['MemberList']['FILTERBYG'] = 'Filtrar por grupo';
$lang['pt_PT']['MemberList']['FN'] = 'Primeiro nome';
$lang['pt_PT']['MemberList']['PASSWD'] = 'Password';
$lang['pt_PT']['MemberList']['SEARCH'] = 'Procurar';
$lang['pt_PT']['MemberList']['SN'] = 'Sobrenome';
$lang['pt_PT']['MemberList.ss']['FILTER'] = 'Filtro';
$lang['pt_PT']['MemberList_Table.ss']['EMAIL'] = 'Endereço de Email';
$lang['pt_PT']['MemberList_Table.ss']['FN'] = 'Primeiro Nome';
$lang['pt_PT']['MemberList_Table.ss']['PASSWD'] = 'Password';
$lang['pt_PT']['MemberList_Table.ss']['SN'] = 'Sobrenome';
$lang['pt_PT']['MemberTableField']['ADD'] = 'Adicionar';
$lang['pt_PT']['MemberTableField']['ADDEDTOGROUP'] = 'Membro adicionado ao grupo';
$lang['pt_PT']['MemberTableField.ss']['ADDNEW'] = 'Adicionar Novo';
$lang['pt_PT']['MemberTableField.ss']['DELETEMEMBER'] = 'Apagar este membro';
$lang['pt_PT']['MemberTableField.ss']['EDITMEMBER'] = 'Editar este membro';
$lang['pt_PT']['MemberTableField.ss']['SHOWMEMBER'] = 'Mostrar este membro';
$lang['pt_PT']['NewsletterAdmin']['FROMEM'] = 'Do endereço de email';
$lang['pt_PT']['NewsletterAdmin']['MEWDRAFTMEWSL'] = 'Novo rascunho de lista de email';
$lang['pt_PT']['NewsletterAdmin']['NEWLIST'] = 'Nova lista de email';
$lang['pt_PT']['NewsletterAdmin']['NEWNEWSLTYPE'] = 'Novo tipo de lista de email';
$lang['pt_PT']['NewsletterAdmin']['NEWSLTYPE'] = 'Tipo de Lista de email';
$lang['pt_PT']['NewsletterAdmin']['PLEASEENTERMAIL'] = 'Por favor insira um endereço de email';
$lang['pt_PT']['NewsletterAdmin']['RESEND'] = 'Reenviar';
$lang['pt_PT']['NewsletterAdmin']['SAVE'] = 'Gravar';
$lang['pt_PT']['NewsletterAdmin']['SAVED'] = 'Gravado';
$lang['pt_PT']['NewsletterAdmin']['SEND'] = 'Enviar...';
$lang['pt_PT']['NewsletterAdmin']['SENDING'] = 'A Enviar emails...';
$lang['pt_PT']['NewsletterAdmin']['SENTTESTTO'] = 'Enviar teste para ';
$lang['pt_PT']['NewsletterAdmin']['SHOWCONTENTS'] = 'Mostrar conteúdo';
$lang['pt_PT']['NewsletterAdmin_BouncedList.ss']['EMADD'] = 'Endereço de Email';
$lang['pt_PT']['NewsletterAdmin_BouncedList.ss']['HAVEBOUNCED'] = 'Emails devolvidos';
$lang['pt_PT']['NewsletterAdmin_BouncedList.ss']['NOBOUNCED'] = 'Nenhum email enviado foi devolvido.';
$lang['pt_PT']['NewsletterAdmin_BouncedList.ss']['UNAME'] = 'Nome de Utilizador';
$lang['pt_PT']['NewsletterAdmin_left.ss']['ADDDRAFT'] = 'Adicionar novo rascunho';
$lang['pt_PT']['NewsletterAdmin_left.ss']['ADDTYPE'] = 'Adicionar novo tipo';
$lang['pt_PT']['NewsletterAdmin_left.ss']['CREATE'] = 'Criar';
$lang['pt_PT']['NewsletterAdmin_left.ss']['DEL'] = 'Apagar';
$lang['pt_PT']['NewsletterAdmin_left.ss']['DELETEDRAFTS'] = 'Apagar os rascunhos seleccionados';
$lang['pt_PT']['NewsletterAdmin_left.ss']['GO'] = 'Ir';
$lang['pt_PT']['NewsletterAdmin_left.ss']['NEWSLETTERS'] = 'Listas de Email';
$lang['pt_PT']['NewsletterAdmin_left.ss']['SELECTDRAFTS'] = 'Seleccione os rascunhos que deseja apagar, em seguida pressione o botão abaixo';
$lang['pt_PT']['NewsletterAdmin_right.ss']['CANCEL'] = 'Cancelar';
$lang['pt_PT']['NewsletterAdmin_right.ss']['ENTIRE'] = 'Enviar para toda a lista de email';
$lang['pt_PT']['NewsletterAdmin_right.ss']['ONLYNOT'] = 'Enviar apenas para pessoas que não foi enviado anteriormente';
$lang['pt_PT']['NewsletterAdmin_right.ss']['SEND'] = 'Enviar lista de email';
$lang['pt_PT']['NewsletterAdmin_right.ss']['SENDTEST'] = 'Enviar teste para';
$lang['pt_PT']['NewsletterAdmin_right.ss']['WELCOME1'] = 'Bem vindo ao';
$lang['pt_PT']['NewsletterAdmin_right.ss']['WELCOME2'] = 'secção de administração de listas de email.  Por favor escolha uma pasta na esquerda.';
$lang['pt_PT']['NewsletterAdmin_SiteTree.ss']['DRAFTS'] = 'Rascunhos';
$lang['pt_PT']['NewsletterAdmin_SiteTree.ss']['MAILLIST'] = 'Lista de Email';
$lang['pt_PT']['NewsletterAdmin_SiteTree.ss']['SENT'] = 'Itens Enviados';
$lang['pt_PT']['NewsletterAdmin_UnsubscribedList.ss']['NOUNSUB'] = 'Nenhum utilizador removeu a assinatura desta lista de email.';
$lang['pt_PT']['NewsletterAdmin_UnsubscribedList.ss']['UNAME'] = 'Nome de Utilizador';
$lang['pt_PT']['NewsletterAdmin_UnsubscribedList.ss']['UNSUBON'] = 'Assinatura removida em';
$lang['pt_PT']['NewsletterList.ss']['CHOOSEDRAFT1'] = 'Por favor escolha um rascunho na esquerda, ou';
$lang['pt_PT']['NewsletterList.ss']['CHOOSEDRAFT2'] = 'adicione um';
$lang['pt_PT']['NewsletterList.ss']['CHOOSESENT'] = 'Por favor escolha um item enviado na esquerda.';
$lang['pt_PT']['Newsletter_RecipientImportField.ss']['CHANGED'] = 'Número de detalhes alterados:';
$lang['pt_PT']['Newsletter_RecipientImportField.ss']['IMPORTED'] = 'Novos membros importados:';
$lang['pt_PT']['Newsletter_RecipientImportField.ss']['IMPORTNEW'] = 'Novos membros importados';
$lang['pt_PT']['Newsletter_RecipientImportField.ss']['SEC'] = 'segundos';
$lang['pt_PT']['Newsletter_RecipientImportField.ss']['SKIPPED'] = 'Registos não alterados:';
$lang['pt_PT']['Newsletter_RecipientImportField.ss']['TIME'] = 'Efectuado em:';
$lang['pt_PT']['Newsletter_RecipientImportField.ss']['UPDATED'] = 'Membros actualizados:';
$lang['pt_PT']['Newsletter_RecipientImportField_Table.ss']['CONTENTSOF'] = 'Conteúdo de';
$lang['pt_PT']['Newsletter_RecipientImportField_Table.ss']['NO'] = 'Cancelar';
$lang['pt_PT']['Newsletter_RecipientImportField_Table.ss']['RECIMPORTED'] = 'Recipientes importados de';
$lang['pt_PT']['Newsletter_RecipientImportField_Table.ss']['YES'] = 'Confirmar';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['DATE'] = 'Data';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['EMAIL'] = 'Email';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['FN'] = 'Primeiro Nome';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['NEWSNEVERSENT'] = 'O Email nunca foi enviado para os seguintes assinantes';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['RES'] = 'Resultado';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['SENDBOUNCED'] = 'O envio para os seguintes destinatários foi devolvido';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['SENDFAIL'] = 'O envio para os seguintes destinatários falhou';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['SENTOK'] = 'O envio para os seguintes destinatários foi efectuado com sucesso';
$lang['pt_PT']['Newsletter_SentStatusReport.ss']['SN'] = 'Sobrenome';
$lang['pt_PT']['PageComment']['COMMENTBY'] = 'Comentário por \'%s\' em \'%s\'';
$lang['pt_PT']['PageCommentInterface.ss']['COMMENTS'] = 'Comentários';
$lang['pt_PT']['PageCommentInterface.ss']['NEXT'] = 'próximo';
$lang['pt_PT']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Ninguém comentou esta página ainda.';
$lang['pt_PT']['PageCommentInterface.ss']['POSTCOM'] = 'Insira o seu comentário';
$lang['pt_PT']['PageCommentInterface.ss']['PREV'] = 'anterior';
$lang['pt_PT']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'este comentário não é spam';
$lang['pt_PT']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'este comentário é spam';
$lang['pt_PT']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Inserido por';
$lang['pt_PT']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'remover este comentário';
$lang['pt_PT']['ReportAdmin_left.ss']['REPORTS'] = 'Relatórios';
$lang['pt_PT']['ReportAdmin_right.ss']['WELCOME1'] = 'Bem vindo ao';
$lang['pt_PT']['ReportAdmin_right.ss']['WELCOME2'] = 'secção de relatórios.  Por favor, escolha um relatório na esquerda.';
$lang['pt_PT']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Relatórios';
$lang['pt_PT']['SecurityAdmin']['ADDMEMBER'] = 'Adicionar Membro';
$lang['pt_PT']['SecurityAdmin']['ADVANCEDONLY'] = 'Esta secção é para utilizadores avançados apenas.

							Veja <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">esta página</a>

							para mais informações.';
$lang['pt_PT']['SecurityAdmin']['NEWGROUP'] = 'Novo Grupo';
$lang['pt_PT']['SecurityAdmin']['SAVE'] = 'Gravar';
$lang['pt_PT']['SecurityAdmin']['SGROUPS'] = 'Grupos de segurança';
$lang['pt_PT']['SecurityAdmin_left.ss']['CREATE'] = 'Criar';
$lang['pt_PT']['SecurityAdmin_left.ss']['DEL'] = 'Apagar';
$lang['pt_PT']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Apagar os grupos seleccionados';
$lang['pt_PT']['SecurityAdmin_left.ss']['GO'] = 'Ir';
$lang['pt_PT']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Grupos de Segurança';
$lang['pt_PT']['SecurityAdmin_left.ss']['SELECT'] = 'Seleccione as paginas que deseja apagar, em seguida pressione no botão abaixo';
$lang['pt_PT']['SecurityAdmin_left.ss']['TOREORG'] = 'Para reorganizar o seu site, arraste as páginas.';
$lang['pt_PT']['SecurityAdmin_right.ss']['WELCOME1'] = 'Bem vindo ao';
$lang['pt_PT']['SecurityAdmin_right.ss']['WELCOME2'] = 'secção de administração de segurança.  Por favor escolha um grupo na esquerda.';
$lang['pt_PT']['SideReport']['EMPTYPAGES'] = 'Páginas vazias';
$lang['pt_PT']['SideReport']['LAST2WEEKS'] = 'Páginas editadas nas últimas 2 semanas';
$lang['pt_PT']['SideReport']['REPEMPTY'] = 'O relatório %s encontra-se vazio.';
$lang['pt_PT']['StaticExporter']['BASEURL'] = 'URL Base';
$lang['pt_PT']['StaticExporter']['EXPORTTO'] = 'Exportar para esta pasta';
$lang['pt_PT']['StaticExporter']['FOLDEREXPORT'] = 'Pasta para onde exportar';
$lang['pt_PT']['StaticExporter']['NAME'] = 'Exportador estático';
$lang['pt_PT']['StaticExporter']['ONETHATEXISTS'] = 'Por favor, especifique uma pasta existente';
$lang['pt_PT']['StatisticsAdmin_left.ss']['OVERV'] = 'Vista Geral';
$lang['pt_PT']['StatisticsAdmin_left.ss']['REPTYPES'] = 'Tipos de Relatórios';
$lang['pt_PT']['StatisticsAdmin_left.ss']['USERS'] = 'Utilizadores';
$lang['pt_PT']['SubmittedFormEmail.ss']['SUBMITTED'] = 'Os seguintes dados foram inseridos no seu site:';
$lang['pt_PT']['TaskList.ss']['BY'] = 'por';
$lang['pt_PT']['ThumbnailStripField']['NOTAFOLDER'] = 'Não é uma pasta';
$lang['pt_PT']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Escolha uma pasta acima)';
$lang['pt_PT']['ViewArchivedEmail.ss']['CANACCESS'] = 'Pode aceder ao site arquivado através deste link:';
$lang['pt_PT']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Pediu para ver o conteúdo do seu site em';
$lang['pt_PT']['WaitingOn.ss']['ATO'] = 'atribuído a';

?>