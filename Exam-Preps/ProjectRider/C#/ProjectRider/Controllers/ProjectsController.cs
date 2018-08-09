
namespace ProjectRider.Controllers
{
    using Microsoft.AspNetCore.Mvc;
    using ProjectRider.Models;
    using System.Collections.Generic;
    using System.Linq;

    public class ProjectController : Controller
    {
        private readonly ProjectDbContext context;

        public ProjectController(ProjectDbContext context)
        {
            this.context = context;
        }

        [HttpGet]
        [Route("")]
        public IActionResult Index()
        {
            List<Project> projects = context.Projects.ToList();
            return View(projects);
        }

        [HttpGet]
        [Route("create")]
        public IActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        public IActionResult Create(Project project)
        {
            this.context.Projects.Add(project);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("edit/{id}")]
        public IActionResult Edit(int id)
        {
            Project project = this.context.Projects.Find(id);
            return View(project);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public IActionResult EditConfirm(int id, Project projectModel)
        {
            this.context.Projects.Update(projectModel);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("delete/{id}")]
        public IActionResult Delete(int id)
        {
            Project project = this.context.Projects.Find(id);
            return View(project);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Project projectModel)
        {
            this.context.Remove(projectModel);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }
    }
}
