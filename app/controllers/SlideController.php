<?php

class SlideController extends Controller {
    public function show($id) {
        $slide = $this->model('Slide');
        $data = $slide->getSlide($id);

        $this->view('slides/show', $data);
    }
}
