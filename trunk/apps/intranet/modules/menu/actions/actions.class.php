<?php

/**
 * menu actions.
 *
 * @package    tcc
 * @subpackage menu
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class menuActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->menus = Doctrine_Core::getTable('menu')
                ->createQuery('a')
                ->execute();
    }

    public function executeShow(sfWebRequest $request) {
        $this->menu = Doctrine_Core::getTable('menu')->find(array($request->getParameter('cod_menu')));
        $this->forward404Unless($this->menu);
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new menuForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new menuForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($menu = Doctrine_Core::getTable('menu')->find(array($request->getParameter('cod_menu'))), sprintf('Object menu does not exist (%s).', $request->getParameter('cod_menu')));
        $this->form = new menuForm($menu);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($menu = Doctrine_Core::getTable('menu')->find(array($request->getParameter('cod_menu'))), sprintf('Object menu does not exist (%s).', $request->getParameter('cod_menu')));
        $this->form = new menuForm($menu);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($menu = Doctrine_Core::getTable('menu')->find(array($request->getParameter('cod_menu'))), sprintf('Object menu does not exist (%s).', $request->getParameter('cod_menu')));
        $menu->delete();

        $this->redirect('menu/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $menu = $form->save();

            $this->redirect('menu/edit?cod_menu=' . $menu->getCodMenu());
        }
    }

    public function executeClientes(sfWebRequest $request) {
        $this->menus = Doctrine_Core::getTable('menu')
                ->createQuery('a')
                ->execute();
    }

    public function executeCadastro(sfWebRequest $request) {
        $this->menus = Doctrine_Core::getTable('menu')
                ->createQuery('a')
                ->execute();
    }

    public function executePos(sfWebRequest $request) {
        $this->menus = Doctrine_Core::getTable('menu')
                ->createQuery('a')
                ->execute();
    }

    public function executeRelatorio(sfWebRequest $request) {
        $this->menus = Doctrine_Core::getTable('menu')
                ->createQuery('a')
                ->execute();
    }

    public function executeFerramentas(sfWebRequest $request) {
        $this->menus = Doctrine_Core::getTable('menu')
                ->createQuery('a')
                ->execute();
    }

    public function executeServicos(sfWebRequest $request) {
        $this->menus = Doctrine_Core::getTable('menu')
                ->createQuery('a')
                ->execute();
    }

}
