<?php

/**
 * login actions.
 *
 * @package    tcc
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->setSecurityConfiguration(false);
        $this->usuarios = Doctrine_Core::getTable('usuario')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->usuario = Doctrine_Core::getTable('usuario')->find(array($request->getParameter('cod_usuario')));
        $this->forward404Unless($this->usuario);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new usuarioForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new usuarioForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($usuario = Doctrine_Core::getTable('usuario')->find(array($request->getParameter('cod_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('cod_usuario')));
        $this->form = new usuarioForm($usuario);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($usuario = Doctrine_Core::getTable('usuario')->find(array($request->getParameter('cod_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('cod_usuario')));
        $this->form = new usuarioForm($usuario);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($usuario = Doctrine_Core::getTable('usuario')->find(array($request->getParameter('cod_usuario'))), sprintf('Object usuario does not exist (%s).', $request->getParameter('cod_usuario')));
        $usuario->delete();

        $this->redirect('login/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $usuario = $form->save();

            $this->redirect('login/edit?cod_usuario=' . $usuario->getCodUsuario());
        }
    }

}