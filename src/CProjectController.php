<?php
	class CProjectController extends CControllerBase
	{
        private $projects;
		private $options;

        public function __construct()
        {
        }

		public function load($options = []) {
			$this->options = $options;
			$this->loadProjects();
		}

        private function loadProjects()
        {
            $sql = "SELECT p.id, p.name, p.description, p.featured_image, (
						SELECT GROUP_CONCAT(\"\", project_images.url)
						FROM project_images
						WHERE project_images.p_id = p.id
					) AS images, (
						SELECT GROUP_CONCAT(\"\", project_tags.name)
						FROM project_tags
						WHERE project_tags.p_id = p.id
					) AS tags
					FROM projects AS p";

			if (array_key_exists('featured', $this->options) && $this->options['featured']) {
				$sql .= " WHERE featured = 1 AND featured_image IS NOT NULL";
			}

			$res = $this->di->db->ExecuteSelectQueryAndFetchAll($sql);
			foreach($res as $val) {
				$this->projects[] = new CProject($val->name, $val->description, explode(',', $val->images), $val->featured_image, explode(',', $val->tags));
			}
        }

        public function getProjects() {
            return $this->projects;
        }
    }
