namespace IMDB.Controllers
{
    using Microsoft.AspNetCore.Mvc;
    using System.Collections.Generic;
    using System.Linq;
    using Models;

    public class FilmController : Controller
    {
        private readonly IMDBDbContext context;

        public FilmController(IMDBDbContext dbContext)
        {
            this.context = dbContext;
        }

        
        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            List<Film> films = context.Films.ToList();
            return View(films);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        public ActionResult Create(Film film)
        {
            this.context.Films.Add(film);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            Film film = this.context.Films.Find(id);
            return View(film);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Film filmModel)
        {
            this.context.Films.Update(filmModel);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            Film film = this.context.Films.Find(id);
            return View(film);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id, Film filmModel)
        {
            this.context.Remove(filmModel);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }
    }
}
