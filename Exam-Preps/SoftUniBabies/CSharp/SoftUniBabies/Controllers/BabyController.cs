namespace SoftUniBabies.Controllers
{
    using Models;
    using Microsoft.AspNetCore.Mvc;
    using System.Collections.Generic;
    using System.Linq;

    public class BabyController : Controller
    {
        private readonly BabyDbContext context;

        public BabyController(BabyDbContext dbContext)
        {
            this.context = dbContext;
        }

        [HttpGet]
        [Route("")]
        public IActionResult Index()
        {
            List<Baby> babies = context.Babies.ToList();
            return View(babies);
        }

        [HttpGet]
        [Route("/create")]
        public IActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("/create")]
        public IActionResult Create(Baby baby)
        {
            this.context.Babies.Add(baby);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("/edit/{id}")]
        public IActionResult Edit(int id)
        {
            Baby baby = this.context.Babies.Find(id);
            return View(baby);
        }

        [HttpPost]
        [Route("/edit/{id}")]
        public IActionResult Edit(Baby baby)
        {
            this.context.Babies.Update(baby);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("/delete/{id}")]
        public IActionResult Delete(int id)
        {
            Baby baby = this.context.Babies.Find(id);
            return View(baby);
        }

        [HttpPost]
        [Route("/delete/{id}")]
        public IActionResult Delete(Baby baby)
        {
            this.context.Remove(baby);
            this.context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }
    }
}
