<?php
	class CProjectController extends CControllerBase
	{
        private $projects;

        public function __construct()
        {
        }

		public function load() {
			$this->loadProjects();
		}

        private function loadProjects()
        {
            $sql = "SELECT p.id, p.name, p.description, (
					SELECT GROUP_CONCAT(\"\", project_images.url)
					FROM project_images
					WHERE project_images.p_id = p.id) AS images, (
					SELECT GROUP_CONCAT(\"\", project_tags.name)
					FROM project_tags
					WHERE project_tags.p_id = p.id) AS tags
					FROM projects AS p";

			$res = $this->di->db->ExecuteSelectQueryAndFetchAll($sql);

			foreach($res as $val) {
				$this->projects[] = new CProject($val->name, $val->description, explode(',', $val->images), explode(',', $val->tags));
			}
        }

        public function getProjects() {
            return $this->projects;
        }
    }
